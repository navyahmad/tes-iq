<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\DiscAnswer;
use App\Models\DiscResult;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\DiscProfile;

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
    'disc_profile_id',

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

    'graph_d',
    'graph_i',
    'graph_s',
    'graph_c',

    'primary_type',
    'secondary_type',
    'disc_type',
];

    public function answers(): HasMany
    {
        return $this->hasMany(DiscAnswer::class);
    }

    public function result(): HasOne
    {
        return $this->hasOne(DiscResult::class);
    }
    public function profile(): BelongsTo
    {
        return $this->belongsTo(DiscProfile::class, 'disc_profile_id');
    }
}