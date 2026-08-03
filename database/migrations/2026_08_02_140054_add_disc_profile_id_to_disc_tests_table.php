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

            $table->foreignId('disc_profile_id')
                ->nullable()
                ->after('disc_type')
                ->constrained('disc_profiles')
                ->nullOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('disc_tests', function (Blueprint $table) {

            $table->dropForeign(['disc_profile_id']);

            $table->dropColumn('disc_profile_id');

        });
    }
};