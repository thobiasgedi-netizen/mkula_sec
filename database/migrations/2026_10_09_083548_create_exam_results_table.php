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
    Schema::create('exam_results', function (Blueprint $table) {
        $table->id();
        $table->string('title'); // Mfano: Form Four Terminal Examination
        $table->string('form_level'); // Mfano: Form One, Form Two, Form Four
        $table->string('year'); // Mfano: 2026
        $table->string('file_path')->nullable(); // Kama ni PDF
        $table->string('external_link')->nullable(); // Kama ni link ya NECTA/Online
        $table->boolean('is_published')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_results');
    }
};
