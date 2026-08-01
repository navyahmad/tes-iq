<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\DiscAnswer;

class DiscQuestion extends Model
{
    protected $fillable = [
        'question_number',
        'statement_1',
        'statement_2',
        'statement_3',
        'statement_4',
        'mapping_1',
        'mapping_2',
        'mapping_3',
        'mapping_4',
        'is_active',
    ];

    public function answers(): HasMany
    {
        return $this->hasMany(DiscAnswer::class);
    }
}