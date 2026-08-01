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
        Schema::create('disc_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('question_number')->unique();

            $table->text('statement_1');
            $table->text('statement_2');
            $table->text('statement_3');
            $table->text('statement_4');

            $table->enum('mapping_1',['D','I','S','C']);
            $table->enum('mapping_2',['D','I','S','C']);
            $table->enum('mapping_3',['D','I','S','C']);
            $table->enum('mapping_4',['D','I','S','C']);

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disc_questions');
    }
};
