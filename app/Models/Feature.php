<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = ['title', 'description'];

    protected $table = 'features';

    public $timestamps = true; // Pastikan timestamps diaktifkan
}
