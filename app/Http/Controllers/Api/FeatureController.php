<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;

class FeatureController extends Controller
{
    // Mendapatkan semua fitur
    public function index()
    {
        $features = Feature::all();  // Menampilkan semua data fitur
        return response()->json($features);
    }

    // Mendapatkan fitur berdasarkan ID
    public function show($id)
    {
        $feature = Feature::findOrFail($id);  // Menampilkan fitur berdasarkan ID
        return response()->json($feature);
    }
}
