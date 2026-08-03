<?php

namespace App\Http\Controllers\Disc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Requests\StartDiscTestRequest;
use App\Models\DiscQuestion;
use App\Models\DiscTest;
use App\Models\DiscAnswer;
use Illuminate\Support\Facades\DB;
use App\Models\DiscGraphConversion;
use App\Models\DiscProfile;



class DiscTestController extends Controller
{
    /**
     * Form Biodata
     */
    public function index(): Response
    {
        return Inertia::render('DISC/Biodata');
    }

    /**
     * Simpan biodata & lanjut ke instruksi
     */
    public function start(StartDiscTestRequest $request)
    {
        $discTest = DiscTest::create([
            'participant_name' => $request->participant_name,
            'age' => $request->age,
            'gender' => $request->gender,
            'status' => 'draft',
        ]);

        return redirect()->route('disc.instruction', $discTest->id);
    }

    /**
     * Halaman Instruksi Tes
     */
    public function instruction(DiscTest $discTest): Response
    {
        return Inertia::render('DISC/Instruction', [
            'discTest' => $discTest,
        ]);
    }

    /**
     * Halaman Tes
     */
    public function test(DiscTest $discTest): Response
    {
        if (!$discTest->started_at) {
            $discTest->update([
                'started_at' => now(),
                'status' => 'in_progress',
            ]);
        }

        $questions = DiscQuestion::query()
            ->where('is_active', true)
            ->orderBy('question_number')
            ->get();

        return Inertia::render('DISC/Test', [
            'discTest' => $discTest,
            'questions' => $questions,
        ]);
    }

    /**
 * Submit jawaban
 */
public function submit(Request $request, DiscTest $discTest)
{
    $validated = $request->validate([
        'answers' => ['required', 'array', 'size:24'],
    ]);

    DB::transaction(function () use ($validated, $discTest) {

        $discTest->answers()->delete();

        foreach ($validated['answers'] as $questionId => $answer) {

            $question = DiscQuestion::findOrFail($questionId);

            DiscAnswer::create([
                'disc_test_id'      => $discTest->id,
                'disc_question_id'  => $question->id,

                'most_choice'       => $answer['most_choice'],
                'least_choice'      => $answer['least_choice'],

                'most_dimension'    => $question->{'mapping_'.$answer['most_choice']},
                'least_dimension'   => $question->{'mapping_'.$answer['least_choice']},
            ]);
        }

        $answers = $discTest->answers()->get();

        $most = [
            'D' => 0,
            'I' => 0,
            'S' => 0,
            'C' => 0,
        ];

        $least = [
            'D' => 0,
            'I' => 0,
            'S' => 0,
            'C' => 0,
        ];

        foreach ($answers as $answer) {

            $most[$answer->most_dimension]++;

            $least[$answer->least_dimension]++;
        }

        $change = [
            'D' => $most['D'] - $least['D'],
            'I' => $most['I'] - $least['I'],
            'S' => $most['S'] - $least['S'],
            'C' => $most['C'] - $least['C'],
        ];

        $graph = [

            'D' => DiscGraphConversion::where('change_score', $change['D'])->value('graph_score'),

            'I' => DiscGraphConversion::where('change_score', $change['I'])->value('graph_score'),

            'S' => DiscGraphConversion::where('change_score', $change['S'])->value('graph_score'),

            'C' => DiscGraphConversion::where('change_score', $change['C'])->value('graph_score'),

        ];

        $graphScores = [

            'D' => $graph['D'],
            'I' => $graph['I'],
            'S' => $graph['S'],
            'C' => $graph['C'],

        ];

        arsort($graphScores);
        $types = array_keys($graphScores);

        $primary = $types[0];
        $secondary = $types[1];

        $values = array_values($graphScores);

        $primaryScore = $values[0];
        $secondaryScore = $values[1];

        $discType = $primary . $secondary;

        if (abs($primaryScore - $secondaryScore) <= 5) {

            $discType = $primary.$secondary;

        } else {

            $discType = $primary;

        }

        $profile = DiscProfile::where('code', $discType)->first();

        $discTest->update([

            'finished_at' => now(),
            'status' => 'completed',
            'disc_profile_id' => $profile?->id,

            // Raw Score
            'most_d' => $most['D'],
            'most_i' => $most['I'],
            'most_s' => $most['S'],
            'most_c' => $most['C'],

            'least_d' => $least['D'],
            'least_i' => $least['I'],
            'least_s' => $least['S'],
            'least_c' => $least['C'],

            // Change Score
            'change_d' => $change['D'],
            'change_i' => $change['I'],
            'change_s' => $change['S'],
            'change_c' => $change['C'],

            'graph_d' => $graph['D'],
            'graph_i' => $graph['I'],
            'graph_s' => $graph['S'],
            'graph_c' => $graph['C'],

            'primary_type'=>$primary,

            'secondary_type'=>$secondary,

            'disc_type'=>$discType,

        ]);
    });

    return redirect()->route('disc.result', $discTest);
}

    /**
     * Halaman hasil
    */
    public function result(DiscTest $discTest)
    {
        $discTest->load([
        'profile',
        'answers.question.interpretations',
    ]);

        return Inertia::render('DISC/Result', [

            'discTest' => $discTest,

            'profile' => $discTest->profile,

        ]);
    }
    
}