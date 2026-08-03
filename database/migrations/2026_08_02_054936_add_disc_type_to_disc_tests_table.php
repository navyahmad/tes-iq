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

            $table->string('primary_type',2)->nullable();

            $table->string('secondary_type',2)->nullable();

            $table->string('disc_type',4)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('disc_tests', function (Blueprint $table) {
            //
        });
    }
};
