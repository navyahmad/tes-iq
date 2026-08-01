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
        Schema::create('disc_answers', function (Blueprint $table) {

            $table->id();

            $table->foreignId('disc_test_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('disc_question_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->unsignedTinyInteger('most_choice');

            $table->unsignedTinyInteger('least_choice');

            $table->enum('most_dimension',['D','I','S','C']);

            $table->enum('least_dimension',['D','I','S','C']);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disc_answers');
    }
};
