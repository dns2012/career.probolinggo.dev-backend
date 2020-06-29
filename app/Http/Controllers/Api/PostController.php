<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Resources\Post as PostResource;
use App\Post;
use App\Tools\ResponseTool;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Get all post list.
     *
     * @return array
     */
    public function getAll()
    {
        return PostResource::collection(
            Post::orderBy('created_at', 'desc')->paginate(8)
        );
    }

    /**
     * Get post by id.
     *
     * @param  mixed $id
     * @return array
     */
    public function getById($id)
    {
        return ResponseTool::success(
            new PostResource(Post::findOrFail($id))
        );
    }

    /**
     * Get post by slug.
     *
     * @param  mixed $slug
     * @return array
     */
    public function getBySlug($slug)
    {
        return ResponseTool::success(
            new PostResource(Post::where('slug', $slug)->firstOrFail())
        );
    }

    /**
     * Get post by category id.
     *
     * @param  mixed $id
     * @return array
     */
    public function getByCategoryId($id)
    {
        return PostResource::collection(
            Post::where('category_id', $id)->orderBy('created_at', 'desc')->paginate(8)
        );
    }

    /**
     * Get post by category id.
     *
     * @param  mixed $id
     * @return array
     */
    public function getByCompanyId($id)
    {
        return PostResource::collection(
            Post::where('company_id', $id)->orderBy('created_at', 'desc')->paginate(8)
        );
    }
}
