<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('disc_tests', function (Blueprint $table) {

            $table->tinyInteger('change_d')->default(0);
            $table->tinyInteger('change_i')->default(0);
            $table->tinyInteger('change_s')->default(0);
            $table->tinyInteger('change_c')->default(0);

        });
    }

    public function down(): void
    {
        Schema::table('disc_tests', function (Blueprint $table) {

            $table->dropColumn([
                'change_d',
                'change_i',
                'change_s',
                'change_c',
            ]);

        });
    }
};
