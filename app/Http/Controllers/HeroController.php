<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function getHeroData()
    {
        return response()->json(Hero::first());
    }


    public function update(Request $request, $id)
    {
        $hero = Hero::find($id);

        if (!$hero) {
            return response()->json(['message' => 'Hero not found'], 404);
        }

        // Validasi input
        $request->validate([
            'title' => 'required|string',
            'subTitle' => 'required|string',
            'primaryBtn' => 'required|string',
            'primaryBtnURL' => 'required|url',
            'src' => 'required|url',
            'alt' => 'required|string',
        ]);

        // Update data Hero
        $hero->update([
            'title' => $request->input('title'),
            'subTitle' => $request->input('subTitle'),
            'primaryBtn' => $request->input('primaryBtn'),
            'primaryBtnURL' => $request->input('primaryBtnURL'),
            'src' => $request->input('src'),
            'alt' => $request->input('alt'),
        ]);

        return response()->json($hero);
    }
}
