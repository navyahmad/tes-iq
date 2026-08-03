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
        Schema::create('disc_graph_conversions', function (Blueprint $table) {

            $table->id();

            // Nilai hasil Most - Least
            $table->tinyInteger('change_score')->unique();

            // Nilai grafik hasil konversi
            $table->unsignedTinyInteger('graph_score');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disc_graph_conversions');
    }
};