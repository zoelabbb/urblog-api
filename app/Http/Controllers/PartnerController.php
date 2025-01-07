<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index(): JsonResponse
    {
        $partners = Partner::all();
        return response()->json($partners);
    }
}
