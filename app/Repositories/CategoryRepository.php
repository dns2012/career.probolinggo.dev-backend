<?php

namespace App\Repositories;

use App\Category;
use Exception;
use Illuminate\Support\Str;

class CategoryRepository
{
    /**
     * Create category.
     *
     * @param  mixed $request
     * @return object
     */
    public static function create($request)
    {
        $category = new Category();
        $category->title = $request->input('title');
        $category->description = $request->input('description');
        $category->slug = Str::slug($category->title);

        if ($category->save()) {
            return $category;
        }

        throw new Exception('Failed to store category !');
    }

    /**
     * Update category.
     *
     * @param  mixed $request
     * @return object
     */
    public static function update($request, $id)
    {
        $category = Category::findOrFail($id);
        $category->title = $request->input('title');
        $category->description = $request->input('description');
        $category->slug = Str::slug($category->title);

        if ($category->save()) {
            return $category;
        }

        throw new Exception('Failed to update category !');
    }
}
