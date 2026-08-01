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
        Schema::create('disc_tests', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->string('participant_name');

            $table->unsignedTinyInteger('age');

            $table->enum('gender',['L','P']);

            $table->timestamp('started_at')->nullable();

            $table->timestamp('finished_at')->nullable();

            $table->unsignedSmallInteger('duration_seconds')->nullable();

            $table->enum('status',[
                'draft',
                'in_progress',
                'completed'
            ])->default('draft');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disc_tests');
    }
};
