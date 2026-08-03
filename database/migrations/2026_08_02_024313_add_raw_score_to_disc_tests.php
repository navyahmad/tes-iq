<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('disc_tests', function (Blueprint $table) {

            $table->unsignedTinyInteger('most_d')->default(0);
            $table->unsignedTinyInteger('most_i')->default(0);
            $table->unsignedTinyInteger('most_s')->default(0);
            $table->unsignedTinyInteger('most_c')->default(0);

            $table->unsignedTinyInteger('least_d')->default(0);
            $table->unsignedTinyInteger('least_i')->default(0);
            $table->unsignedTinyInteger('least_s')->default(0);
            $table->unsignedTinyInteger('least_c')->default(0);
            

        });
    }

    public function down(): void
    {
        Schema::table('disc_tests', function (Blueprint $table) {

            $table->dropColumn([
                'most_d',
                'most_i',
                'most_s',
                'most_c',
                'least_d',
                'least_i',
                'least_s',
                'least_c',
            ]);

        });
    }
};