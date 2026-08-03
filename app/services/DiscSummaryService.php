<?php

namespace App\Services;

use App\Models\DiscTest;

class DiscSummaryService
{
    public function generate(DiscTest $discTest)
    {
        $discTest->load([

            'answers.question',

            'answers.mostInterpretation',

            'answers.leastInterpretation',

        ]);

        return $discTest;
    }
}