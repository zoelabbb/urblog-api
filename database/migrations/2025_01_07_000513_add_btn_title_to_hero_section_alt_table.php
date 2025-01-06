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
        Schema::table('hero_section_alt', function (Blueprint $table) {
            $table->string('btnTitle')->nullable(); // Menambahkan kolom btnTitle
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hero_section_alt', function (Blueprint $table) {
            $table->dropColumn('btnTitle'); // Menghapus kolom btnTitle
        });
    }
};
