<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    // Ambil semua post
    public function index()
    {
        $posts = Post::all();  // Mengambil semua post dari database

        // Format data agar sesuai dengan struktur yang diinginkan
        $posts = $posts->map(function ($post) {
            return [
                'title' => $post->title,
                'description' => $post->description,
                'pubDate' => $post->created_at->toDateString(),
                'category' => $post->category,
                'banner' => $post->banner,
                'banner2' => $post->banner2,
                'tags' => json_decode($post->tags),  // Pastikan format tags adalah array
                'oldViewCount' => $post->view_count,
                'selected' => $post->selected,
                'oldKeywords' => json_decode($post->keywords),  // Pastikan keywords dalam format array
            ];
        });

        return response()->json($posts);
    }

    // Ambil post berdasarkan ID
    public function show($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['error' => 'Post not found'], 404);
        }

        return response()->json($post);
    }
}
