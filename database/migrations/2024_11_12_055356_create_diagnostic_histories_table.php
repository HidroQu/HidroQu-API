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
        Schema::create('diagnostic_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key ke tabel users
            $table->foreignId('user_plant_id')->constrained()->onDelete('cascade'); // Foreign key ke tabel user_plants
            $table->foreignId('diagnostic_id')->constrained()->onDelete('cascade'); // Foreign key ke tabel diagnostics
            $table->dateTime('diagnosis_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnostic_histories');
    }
};
