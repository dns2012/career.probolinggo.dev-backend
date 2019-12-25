<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function findAll()
    {
        return response()->json([
            'status' => true,
            'data' => Post::all()
        ], 200);
    }

    public function findById($id)
    {
        $data = Post::find($id);

        if ($data) {
            $response = [
                'status' => true,
                'data' => $data
            ];
            $response_code = 200;
        } else {
            $response = [
                'status' => false,
                'message' => 'post not found'
            ];
            $response_code = 404;
        }

        return response()->json($response, $response_code);
    }
}
