<?php

namespace App\Repositories;

use App\Post;
use App\Services\ImageService;
use App\Services\TelegramService;
use Exception;
use Illuminate\Support\Str;

class PostRepository
{
    /**
     * Create post.
     *
     * @param  mixed $request
     * @return object
     */
    public static function create($request)
    {
        $post = new Post();
        $post->category_id = $request->input('category');
        $post->company_id = $request->input('company');
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->salary = $request->input('salary');
        $post->district = $request->input('district');
        $post->city = $request->input('city');
        $post->slug = Str::slug($post->title) . '-' . uniqid();

        if ($request->file('image')) {
            $post->image = ImageService::upload(['image' => $request->file('image')]);
        }

        if ($post->save()) {
            $telegramService = new TelegramService();
            $telegramService->sendMessage(env('TELEGRAM_PROBOLINGGO_DEV_CHAT_ID'), env('CAREER_JOB_URL') . $post->slug . PHP_EOL . '@here');
            return $post;
        }

        throw new Exception('Failed to store post !');
    }

    /**
     * Update post.
     *
     * @param  mixed $request
     * @return object
     */
    public static function update($request, $id)
    {
        $post = Post::findOrFail($id);
        $post->category_id = $request->input('category');
        $post->company_id = $request->input('company');
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->salary = $request->input('salary');
        $post->district = $request->input('district');
        $post->city = $request->input('city');
        $post->slug = Str::slug($post->title) . '-' . uniqid();

        if ($request->file('image')) {
            $post->image = ImageService::upload(['image' => $request->file('image')]);
        }

        if ($post->save()) {
            return $post;
        }

        throw new Exception('Failed to update post !');
    }

    /**
     * Find post by id.
     *
     * @param  mixed $id
     * @return object
     */
    public static function findById($id)
    {
        $post = Post::findOrFail($id);
        $post->isDetail = true;
        return $post;
    }

    /**
     * Find post by slug.
     *
     * @param  mixed $slug
     * @return object
     */
    public static function findBySlug($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->isDetail = true;
        return $post;
    }

    /**
     * Find post by like title.
     *
     * @param  mixed $title
     * @return array
     */
    public static function searchByTitle($title)
    {
        return Post::where('title','LIKE',"%$title%")
                ->orderBy('created_at', 'desc')
                ->paginate(10);
    }
}
