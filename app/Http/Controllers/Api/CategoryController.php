<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use App\Tools\ResponseTool;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Get all list category
     *
     * @return void
     */
    public function getAll()
    {
        return ResponseTool::success(Category::orderBy('created_at', 'desc')
            ->withCount('post')
            ->paginate(8));
    }
}
