<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DiscAnswer extends Model
{
    protected $fillable = [
        'disc_test_id',
        'disc_question_id',
        'most_option',
        'least_option',
        'most_disc',
        'least_disc',
    ];

    public function test(): BelongsTo
    {
        return $this->belongsTo(DiscTest::class, 'disc_test_id');
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(DiscQuestion::class, 'disc_question_id');
    }
}