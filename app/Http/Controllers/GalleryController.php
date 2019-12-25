<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests\StoreGallery;
use App\Http\Requests\UpdateGallery;
use App\Services\ImgurService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gallery.index', [
            'gallery' => Gallery::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGallery $request)
    {
        $request->validated();

        $gallery = new Gallery;
        $gallery->title = $request->input('title');
        $gallery->image = ImgurService::upload($request->file('image')->path());
        $gallery->slug = Str::slug($gallery->title);

        if($gallery->save()) {
            return redirect()->route('gallery.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('gallery.edit', [
            'gallery' => Gallery::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGallery $request, $id)
    {
        $request->validated();

        $gallery = Gallery::findOrFail($id);
        $gallery->title = $request->input('title');
        $gallery->slug = Str::slug($gallery->title);

        if ($request->file('image')) {
            $gallery->image = ImgurService::upload($request->file('image')->path());
        }

        if($gallery->save()) {
            return redirect()->route('gallery.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        if($gallery->delete()) {
            return redirect()->route('gallery.index');
        }
    }
}
