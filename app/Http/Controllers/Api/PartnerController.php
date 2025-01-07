<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\JsonResponse;

class PartnerController extends Controller
{
    public function index(): JsonResponse
    {
        $partners = Partner::all();
        return response()->json($partners);
    }

    public function show($id): JsonResponse
    {
        $partner = Partner::find($id);
        return response()->json($partner);
    }
}
