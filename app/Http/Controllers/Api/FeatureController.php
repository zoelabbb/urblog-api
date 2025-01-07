<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Http\Resources\FeatureResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class FeatureController extends Controller
{
    // Mendapatkan semua fitur
    public function index()
    {
        try {
            $features = Feature::all();  // Menampilkan semua data fitur

            if ($features->isEmpty()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Tidak ada data.',
                    'data' => []
                ], 200);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Data fitur berhasil diambil',
                'data' => FeatureResource::collection($features)
            ], 200);
        } catch (\Exception $e) {
            // Menangani error yang terjadi, seperti kesalahan query database
            return response()->json([
                'status' => 'failed',
                'message' => 'Terjadi kesalahan dalam mengambil data.',
                'error' => $e->getMessage()  // Menampilkan pesan error teknis
            ], 500);  // Status 500 untuk internal server error
        }
    }

    // Mendapatkan fitur berdasarkan ID
    public function show($id)
    {
        try {
            $feature = Feature::findOrFail($id);  // Menampilkan fitur berdasarkan ID

            return response()->json([
                'status' => 'success',
                'message' => 'Data by ID berhasil diambil',
                'data' => new FeatureResource($feature)
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Data tidak ditemukan.',
            ], 404);  // Status 404 untuk data tidak ditemukan
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Terjadi kesalahan dalam mengambil data.',
                'error' => $e->getMessage(),  // Menampilkan pesan error teknis
            ], 500);  // Status 500 untuk internal server error
        }
    }
}
