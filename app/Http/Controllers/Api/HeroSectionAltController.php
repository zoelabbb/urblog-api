<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\HeroSectionAlt;
use Illuminate\Http\Request;

class HeroSectionAltController extends Controller
{
    public function index()
    {
        $heroData = HeroSectionAlt::first();

        return response()->json($heroData);
    }
}
