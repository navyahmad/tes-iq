<?php

namespace App\Http\Controllers\Disc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Requests\StartDiscTestRequest;
use App\Models\DiscQuestion;
use App\Models\DiscTest;


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
     * Simpan biodata
     */
    public function start(StartDiscTestRequest $request)
{
    $discTest = DiscTest::create([
        'participant_name' => $request->participant_name,
        'age' => $request->age,
        'gender' => $request->gender,
        'started_at' => now(),
        'status' => 'in_progress',
    ]);

    return redirect()->route('disc.test', $discTest->id);
}

    /**
     * Halaman Tes
     */
    public function test(DiscTest $discTest): Response
{
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
    public function submit(Request $request, $discTest)
    {

    }

    /**
     * Halaman hasil
     */
    public function result($discTest)
    {

    }
}