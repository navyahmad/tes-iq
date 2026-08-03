<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\DiscQuestionSeeder;
use Database\Seeders\DiscProfileSeeder;
use Database\Seeders\DiscStatementInterpretationSeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            DiscQuestionSeeder::class,
            DiscProfileSeeder::class,
            DiscStatementInterpretationSeeder::class,
        ]);
    }
}