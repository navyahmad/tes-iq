<?php

namespace App\Services;

use App\Models\DiscTest;
use Illuminate\Support\Collection;

class DiscSummaryService
{
    private const DIMENSION_LABELS = [
        'D' => 'Dominance (D)',
        'I' => 'Influence (I)',
        'S' => 'Steadiness (S)',
        'C' => 'Conscientiousness (C)',
    ];

    private const DIMENSION_TRAITS = [
        'D' => 'tegas, berorientasi hasil, dan suka tantangan',
        'I' => 'persuasif, sosial, dan antusias',
        'S' => 'stabil, sabar, dan konsisten',
        'C' => 'teliti, analitis, dan sistematis',
    ];

    public function generate(DiscTest $discTest): array
    {
        $discTest->load([
            'answers.question.interpretations',
        ]);

        $answers = $discTest->answers;

        if ($answers->isEmpty()) {
            return [
                'title' => 'Ringkasan Profil Personal',
                'paragraphs' => [],
                'dimension_counts' => [],
                'dominant_dimensions' => [],
                'highlighted_statements' => [],
            ];
        }

        $dimensionCounts = $this->countByDimension($answers);
        $dominantDimensions = $dimensionCounts->keys()->values()->all();
        $descriptionsByDimension = $this->groupDescriptionsByDimension($answers);

        return [
            'title' => $this->buildTitle($dominantDimensions),
            'paragraphs' => $this->buildParagraphs($dimensionCounts, $dominantDimensions, $descriptionsByDimension),
            'dimension_counts' => $dimensionCounts->all(),
            'dominant_dimensions' => array_slice($dominantDimensions, 0, 2),
            'highlighted_statements' => $this->collectHighlightedStatements($answers, $dominantDimensions),
        ];
    }

    private function countByDimension(Collection $answers): Collection
    {
        return $answers
            ->groupBy('most_dimension')
            ->map->count()
            ->sortDesc();
    }

    private function groupDescriptionsByDimension(Collection $answers): array
    {
        $grouped = [];

        foreach ($answers as $answer) {
            $interpretation = $answer->most_interpretation;

            if (! $interpretation) {
                continue;
            }

            $grouped[$answer->most_dimension][] = [
                'statement' => $interpretation->statement,
                'description' => $interpretation->most_description,
            ];
        }

        return $grouped;
    }

    private function buildTitle(array $dominantDimensions): string
    {
        if (empty($dominantDimensions)) {
            return 'Ringkasan Profil Personal';
        }

        $primary = $dominantDimensions[0];
        $secondary = $dominantDimensions[1] ?? null;

        if ($secondary && $this->shouldCombineTypes($primary, $secondary)) {
            return 'Profil Personal: Kecenderungan '.self::DIMENSION_LABELS[$primary].' & '.self::DIMENSION_LABELS[$secondary];
        }

        return 'Profil Personal: Kecenderungan '.self::DIMENSION_LABELS[$primary];
    }

    private function shouldCombineTypes(string $primary, string $secondary): bool
    {
        return in_array($secondary, ['D', 'I', 'S', 'C'], true);
    }

    private function buildParagraphs(
        Collection $dimensionCounts,
        array $dominantDimensions,
        array $descriptionsByDimension
    ): array {
        $paragraphs = [];
        $paragraphs[] = $this->buildIntroParagraph($dimensionCounts, $dominantDimensions);

        $body = $this->buildBodyParagraph($dominantDimensions, $descriptionsByDimension);

        if ($body !== '') {
            $paragraphs[] = $body;
        }

        $closing = $this->buildClosingParagraph($dominantDimensions, $descriptionsByDimension);

        if ($closing !== '') {
            $paragraphs[] = $closing;
        }

        return array_values(array_filter($paragraphs));
    }

    private function buildIntroParagraph(Collection $dimensionCounts, array $dominantDimensions): string
    {
        $total = $dimensionCounts->sum();
        $primary = $dominantDimensions[0];
        $secondary = $dominantDimensions[1] ?? null;

        $distribution = collect($dominantDimensions)
            ->take(2)
            ->map(function (string $dimension) use ($dimensionCounts, $total) {
                $count = $dimensionCounts[$dimension];
                $percentage = $total > 0 ? round(($count / $total) * 100) : 0;

                return self::DIMENSION_LABELS[$dimension]." ({$count} pilihan, {$percentage}%)";
            })
            ->implode(' dan ');

        $traitText = self::DIMENSION_TRAITS[$primary];

        if ($secondary && isset(self::DIMENSION_TRAITS[$secondary])) {
            $traitText .= ', serta cenderung '.self::DIMENSION_TRAITS[$secondary];
        }

        return "Berdasarkan analisis 24 jawaban Anda, dimensi kepribadian yang paling dominan adalah {$distribution}. "
            ."Secara keseluruhan, Anda menunjukkan pola perilaku yang {$traitText}. "
            .'Ringkasan berikut disusun langsung dari pernyataan-pernyataan yang Anda pilih sebagai paling menggambarkan diri Anda.';
    }

    private function buildBodyParagraph(array $dominantDimensions, array $descriptionsByDimension): string
    {
        $sentences = [];

        foreach (array_slice($dominantDimensions, 0, 2) as $dimension) {
            $items = $descriptionsByDimension[$dimension] ?? [];

            foreach (array_slice($items, 0, 3) as $item) {
                $extracted = $this->extractFirstSentence($item['description']);

                if ($extracted !== '' && ! in_array($extracted, $sentences, true)) {
                    $sentences[] = $extracted;
                }
            }
        }

        if (empty($sentences)) {
            return '';
        }

        return implode(' ', array_slice($sentences, 0, 5));
    }

    private function buildClosingParagraph(array $dominantDimensions, array $descriptionsByDimension): string
    {
        $statements = [];

        foreach (array_slice($dominantDimensions, 0, 2) as $dimension) {
            $items = $descriptionsByDimension[$dimension] ?? [];

            foreach (array_slice($items, 3, 3) as $item) {
                $extracted = $this->extractFirstSentence($item['description']);

                if ($extracted !== '' && ! in_array($extracted, $statements, true)) {
                    $statements[] = $extracted;
                }
            }
        }

        if (empty($statements)) {
            return '';
        }

        return 'Dari berbagai pilihan yang Anda ambil, beberapa kecenderungan yang konsisten terlihat: '
            .implode(' ', array_slice($statements, 0, 4));
    }

    private function extractFirstSentence(string $description): string
    {
        $description = trim($description);

        if ($description === '') {
            return '';
        }

        if (preg_match('/^(.+?[.!?])(?:\s|$)/u', $description, $matches)) {
            return trim($matches[1]);
        }

        return $description;
    }

    private function collectHighlightedStatements(Collection $answers, array $dominantDimensions): array
    {
        $priorityDimensions = array_slice($dominantDimensions, 0, 2);

        return $answers
            ->filter(fn ($answer) => in_array($answer->most_dimension, $priorityDimensions, true))
            ->take(6)
            ->map(function ($answer) {
                $interpretation = $answer->most_interpretation;

                if (! $interpretation) {
                    return null;
                }

                return [
                    'statement' => $interpretation->statement,
                    'dimension' => $answer->most_dimension,
                ];
            })
            ->filter()
            ->values()
            ->all();
    }
}
