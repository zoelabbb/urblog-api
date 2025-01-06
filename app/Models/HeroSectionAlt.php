<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HeroSectionAlt extends Model
{
    use HasFactory;

    protected $table = 'hero_section_alt'; // Nama tabel yang sesuai dengan migration
    protected $fillable = ['title', 'subTitle', 'url']; // Kolom yang dapat diisi secara massal
}
