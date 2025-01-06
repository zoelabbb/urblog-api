<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// This is for import controller API
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\HeroController;

Route::get('/hero', [HeroController::class, 'getHeroData']);
Route::put('/hero/{id}', [HeroController::class, 'update']);

Route::get('posts', [PostController::class, 'index']);
Route::get('posts/{id}', [PostController::class, 'show']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
