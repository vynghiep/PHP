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
        Schema::create('artworks', function (Blueprint $table) {
            $table->id();
            $table->string('artist_name'); // Cột artist_name kiểu string
            $table->text('description'); // Cột description kiểu text
            $table->enum('art_type', ['hội họa', 'âm nhạc', 'văn học']); // Cột art_type kiểu enum
            $table->string('media_link'); // Cột media_link kiểu string
            $table->string('cover_image'); // Cột cover_image kiểu string
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artworks');
    }
};
