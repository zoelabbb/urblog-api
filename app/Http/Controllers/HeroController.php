<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    // Ambil data hero
    public function getHeroData()
    {
        return response()->json(Hero::first());
    }
}
