<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'description',
        'avatar',
        'avatar_dark',
        'social',
    ];

    protected $casts = [
        'social' => 'array',
    ];
}
