<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photo = Photo::all();
        return view('backend.pages-home.photo', compact('photo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages-home.photo-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Photo $photo)
    {
        $data = $request->all();
        $photo->create($data);
        return redirect('/pages-home.photo')->withSuccess('Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        return view('backend.pages-home.photo-edit', ['photo' => $photo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Photo $photo)
    {
        $data = $request->all();
        $photo->update($data);
        return redirect('/pages-home.photo')->withSuccess('Berhasil di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect('/pages-home.photo')->withSuccess('Berhasil di Hapus!');
    }
}
