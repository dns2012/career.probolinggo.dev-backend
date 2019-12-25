<?php

namespace App\Http\Controllers\Api;

use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function findAll()
    {
        return response()->json([
            'status' => true,
            'data' => Gallery::all()
        ], 200);
    }
}
