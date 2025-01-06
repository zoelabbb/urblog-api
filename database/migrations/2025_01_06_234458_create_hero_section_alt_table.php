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
        Schema::create('hero_section_alt', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul dari HeroSectionAlt
            $table->text('subTitle'); // Subtitle untuk HeroSectionAlt
            $table->string('url'); // URL GitHub atau URL lainnya
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_section_alt');
    }
};
