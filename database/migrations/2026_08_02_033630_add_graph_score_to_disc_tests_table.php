<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('disc_tests', function (Blueprint $table) {

            $table->unsignedTinyInteger('graph_d')->default(0)->after('least_c');
            $table->unsignedTinyInteger('graph_i')->default(0)->after('graph_d');
            $table->unsignedTinyInteger('graph_s')->default(0)->after('graph_i');
            $table->unsignedTinyInteger('graph_c')->default(0)->after('graph_s');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('disc_tests', function (Blueprint $table) {

            $table->dropColumn([
                'graph_d',
                'graph_i',
                'graph_s',
                'graph_c',
            ]);

        });
    }
};