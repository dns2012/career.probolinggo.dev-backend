<?php

namespace App\Http\Controllers\Api;

use App\Post;
use App\Http\Controllers\Controller;
use App\Tools\ResponseTool;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getPostAll()
    {
        return ResponseTool::success(Post::orderBy('created_at', 'desc')
            ->paginate(5));
    }

    public function getPostTitle($title)
    {
        return ResponseTool::success(Post::where('title','LIKE',"%$title%")
                                        ->orderBy('created_at', 'desc')
                                        ->paginate(10));
    }

}
