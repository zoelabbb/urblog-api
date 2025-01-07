<?php

namespace App\Http\Controllers\Api;

use App\Models\Hero;
use App\Http\Controllers\Controller;
use App\Http\Resources\HeroResource;

class HeroController extends Controller
{
    // Ambil data hero
    public function getHeroData()
    {
        try {
            $heroes = Hero::first();

            if (!$heroes) {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Tidak ada data.',
                    'data' => []
                ], 404);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Data hero berhasil ditemukan.',
                'data' => new HeroResource($heroes)
            ]);
        } catch (\Exception $th) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Terjadi kesalahan dalam mengambil data.',
                'error' => $th->getMessage()
            ], 500);
        }
    }
}
