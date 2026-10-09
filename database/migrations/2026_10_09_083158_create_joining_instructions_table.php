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
    Schema::create('joining_instructions', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('file_path');
        $table->string('academic_year'); // Mfano: 2026/2027
        $table->boolean('is_active')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('joining_instructions');
    }
};
