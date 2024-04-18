<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('albums.index', [
            'albums' => Album::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'images.*' => 'required'
        ]);

        try {
            $album  = Album::create($request->all());

            if ($request->images) {
                foreach ($request->images as $key => $image) {
                    $album->addMedia($image)->toMediaCollection();
                }
            }

            return redirect()->route('albums.index');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        $photos = $album->getMedia();
        return view('albums.show', compact('album', 'photos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        return view('albums.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        $request->validate([
            'title' => 'required',
            //'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $album->update($request->all());

        if ($request->images) {
            foreach ($request->images as $key => $image) {
                $album->addMedia($image)->toMediaCollection();
            }
        }

        return redirect()->route('albums.edit', $album->id)->with('success', 'Album updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        $album->delete();

        return redirect()->route('albums.index');
    }

    public function upload(Request $request, Album $album)
    {
        $request->validate([
            'images.*' => 'required'
        ]);

        if ($request->images) {
            foreach ($request->images as $image) {
                $album->addMedia($image)->toMediaCollection();
            }
        }
      
        return redirect()->back();
    }

    public function showImage(Album $album, $id)
    {
        $media = $album->getMedia();
        $image = $media->where('id', $id)->first();
        
        return view('albums.image-show', compact('album', 'image'));
    }

    public function destroyImage(Album $album, $id)
    {
        $media = $album->getMedia();
        $image = $media->where('id', $id)->first();
        $image->delete();

        return redirect()->back();
    }
}
