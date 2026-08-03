<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\DiscStatementInterpretation;


class DiscAnswer extends Model
{
    protected $fillable = [
    'disc_test_id',
    'disc_question_id',
    'most_choice',
    'least_choice',
    'most_dimension',
    'least_dimension',
];
// Menyertakan properti ini secara otomatis ke JSON/Inertia React
    protected $appends = [
        'most_interpretation',
        'least_interpretation',
    ];

    public function test(): BelongsTo
    {
        return $this->belongsTo(DiscTest::class, 'disc_test_id');
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(DiscQuestion::class, 'disc_question_id');
    }

    public function getMostInterpretationAttribute()
    {
        if (!$this->relationLoaded('question') || !$this->question) {
            return null;
        }

        return $this->question->interpretations
            ->firstWhere('statement_number', $this->most_choice);
    }

    public function getLeastInterpretationAttribute()
    {
        if (!$this->relationLoaded('question') || !$this->question) {
            return null;
        }

        return $this->question->interpretations
            ->firstWhere('statement_number', $this->least_choice);
    }

//     public function mostInterpretation()
// {
//     return $this->hasOne(
//         DiscStatementInterpretation::class,
//         'question_id',
//         'disc_question_id'
//     )
//     ->whereColumn(
//         'statement_number',
//         'disc_answers.most_choice'
//     );
// }

// public function leastInterpretation()
// {
//     return $this->hasOne(
//         DiscStatementInterpretation::class,
//         'question_id',
//         'disc_question_id'
//     )
//     ->whereColumn(
//         'statement_number',
//         'disc_answers.least_choice'
//     );
// }
}