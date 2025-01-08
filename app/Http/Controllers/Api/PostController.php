<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    // Ambil semua post
    public function index()
    {
        try {
            $posts = Post::all(); // Mengambil semua post dari database

            if ($posts->isEmpty()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Tidak ada data.',
                    'data' => []
                ], 200);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Semua data post berhasil diambil.',
                'data' => PostResource::collection($posts),
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan dalam mengambil data.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // Ambil post berdasarkan slug
    public function show($slug)
    {
        try {
            $post = Post::where('slug', $slug)->first();

            if (!$post) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Post tidak ditemukan.'
                ], 404);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Data post berhasil ditemukan.',
                'data' => new PostResource($post)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan dalam mengambil data.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
