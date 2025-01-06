<?php

namespace App\Http\Controllers\Api;

use App\Models\Hero;
use App\Http\Controllers\Controller;

class HeroController extends Controller
{
    // Ambil data hero
    public function getHeroData()
    {
        return response()->json(Hero::first());
    }
}
