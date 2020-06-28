<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\Http\Requests\StorePost;
use App\Http\Requests\UpdatePost;
use App\Post;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post.index', [
            'posts' => Post::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create', [
            'category' => Category::all(),
            'company' => Company::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {
        $request->validated();

        $post = new Post;
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

        if($post->save()) {
            return redirect()->route('post.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('post.edit', [
            'post' => Post::findOrFail($id),
            'category' => Category::all(),
            'company' => Company::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePost $request, $id)
    {
        $request->validated();

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

        if($post->save()) {
            return redirect()->route('post.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Post::findOrFail($id);
        if($user->delete()) {
            return redirect()->route('post.index');
        }
    }
}
