<?php

namespace App\Http\Controllers\Api;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tools\ResponseTool;

class SearchTitleController extends Controller
{
    public function getPostAll()
    {
        return ResponseTool::success(Post::orderBy('created_at', 'desc')
            ->paginate(10));
    }

    public function getSearchTitle($title)
    {
        return ResponseTool::success(Post::where('title','LIKE',"%$title%")
                                        ->orderBy('created_at', 'desc')
                                        ->paginate(10));
    }
}
