<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\DiscTest;

class DiscProfile extends Model
{
    protected $fillable = [

        'code',

        'name',

        'title',

        'summary',

        'strength',

        'weakness',

        'communication',

        'leadership',

        'motivation',

        'stress',

        'development',

        'job_match',

    ];

    protected $casts = [

        'strength' => 'array',

        'weakness' => 'array',

        'communication' => 'array', 

        'leadership' => 'array',

        'motivation' => 'array',

        'stress' => 'array',

        'development' => 'array',

        'job_match' => 'array',

    ];

    public function tests(): HasMany
    {
        return $this->hasMany(DiscTest::class, 'disc_profile_id');
    }
}