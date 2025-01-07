<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// This is for import controller API
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\HeroController;
use App\Http\Controllers\Api\FeatureController;
use App\Http\Controllers\Api\HeroSectionAltController;
use App\Http\Controllers\Api\PartnerController;

// Get list of partners
Route::get('/partners', [PartnerController::class, 'index']);
Route::get('/partners/{id}', [PartnerController::class, 'show']);

// Get detail hero section alternatif
Route::get('hero-section-alt', [HeroSectionAltController::class, 'index']);  // Untuk mendapatkan data hero section alternatif

// Get list of features
Route::get('features', [FeatureController::class, 'index']);  // Untuk mendapatkan semua fitur
Route::get('features/{id}', [FeatureController::class, 'show']);  // Untuk mendapatkan fitur berdasarkan ID

// Get list of hero
Route::get('/hero', [HeroController::class, 'getHeroData']);

// Get list of posts
Route::get('posts', [PostController::class, 'index']);
Route::get('posts/{id}', [PostController::class, 'show']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
