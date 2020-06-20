<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Company;
use App\Http\Controllers\Controller;
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
        return ResponseTool::success(Post::orderBy('created_at', 'desc')->paginate(8));
    }

    /**
     * Get post by id.
     *
     * @param  mixed $id
     * @return array
     */
    public function getById($id)
    {
        $data = Post::findOrFail($id);

        return ResponseTool::success([
            'core' => $data,
            'support' => [
                'company' => $data->company,
                'category' => $data->category
            ]
        ]);
    }

    /**
     * Get post by category id.
     *
     * @param  mixed $id
     * @return array
     */
    public function getByCategoryId($id)
    {
        $category = Category::findOrFail($id);

        return ResponseTool::success([
            'core' => Post::where('category_id', $id)->orderBy('created_at', 'desc')->paginate(8),
            'support' => [
                'category' => $category
            ]
        ]);
    }

    /**
     * Get post by category id.
     *
     * @param  mixed $id
     * @return array
     */
    public function getByCompanyId($id)
    {
        $company = Company::findOrFail($id);

        return ResponseTool::success([
            'core' => Post::where('company_id', $id)->orderBy('created_at', 'desc')->paginate(8),
            'support' => [
                'company' => $company
            ]
        ]);
    }
}
