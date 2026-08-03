<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiscStatementInterpretation extends Model
{
    protected $fillable = [
        'question_id',
        'statement_number',
        'statement',
        'most_description',
        'least_description',
    ];

    public function question()
    {
        return $this->belongsTo(DiscQuestion::class);
    }
}