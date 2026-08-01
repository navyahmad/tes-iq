<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\DiscAnswer;
use App\Models\DiscResult;

class DiscTest extends Model
{
    protected $fillable = [
    'user_id',
    'participant_name',
    'age',
    'gender',
    'started_at',
    'finished_at',
    'duration_seconds',
    'status',
];

    public function answers(): HasMany
    {
        return $this->hasMany(DiscAnswer::class);
    }

    public function result(): HasOne
    {
        return $this->hasOne(DiscResult::class);
    }
}