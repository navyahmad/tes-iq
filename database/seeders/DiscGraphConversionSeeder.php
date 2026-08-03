<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DiscGraphConversion;

class DiscGraphConversionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DiscGraphConversion::truncate();

        $data = [];

        for ($change = -24; $change <= 24; $change++) {

            // Mapping sementara
            // -24 => 0
            // 0   => 50
            // 24  => 100
            $graph = round((($change + 24) / 48) * 100);

            $data[] = [
                'change_score' => $change,
                'graph_score'  => $graph,
                'created_at'   => now(),
                'updated_at'   => now(),
            ];
        }

        DiscGraphConversion::insert($data);
    }
}