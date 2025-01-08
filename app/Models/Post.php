<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'category',
        'banner',
        'tags',
        'keywords',
        'selected',
        'view_count',
        'body',
    ];

    // Mutator untuk menghasilkan slug dari title
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
