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
        Schema::create('disc_statement_interpretations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('question_id')
                ->constrained('disc_questions')
                ->cascadeOnDelete();

            $table->tinyInteger('statement_number');

            $table->text('statement');

            $table->text('most_description');

            $table->text('least_description');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disc_statement_interpretations');
    }
};
