<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DiscResult extends Model
{
    protected $fillable = [
        'disc_test_id',

        'most_d',
        'most_i',
        'most_s',
        'most_c',

        'least_d',
        'least_i',
        'least_s',
        'least_c',

        'change_d',
        'change_i',
        'change_s',
        'change_c',

        'primary_type',
        'secondary_type',

        'graph_json',

        'character_summary',
        'personality_description',
        'job_match',
    ];

    protected $casts = [
        'graph_json' => 'array',
    ];

    public function test(): BelongsTo
    {
        return $this->belongsTo(DiscTest::class);
    }
}