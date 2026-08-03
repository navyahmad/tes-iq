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
        Schema::create('disc_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();

            $table->string('name');

            $table->string('title');

            $table->text('summary');

            $table->json('strength');

            $table->json('weakness');

            $table->json('communication');

            $table->json('leadership');

            $table->json('motivation');

            $table->json('stress');

            $table->json('development');

            $table->json('job_match');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disc_profiles');
    }
};
