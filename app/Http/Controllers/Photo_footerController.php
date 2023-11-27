<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo_footer;
use Illuminate\Support\Facades\Storage;

class Photo_footerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photo_footer = Photo_footer::all();
        return view('backend.pages-footer.photo_footer', compact('photo_footer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages-footer.photo_footer-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Photo_footer $photo_footer)
    {
        $data = $request->all();

        if ($request->hasFile('photo_footer')) {
            $file = $request->file('photo_footer');
            $data['photo_footer'] = Storage::putFileAs('public/photo', $file, $file->getClientOriginalName());
        }

        $photo_footer->create($data);
        return redirect('/pages-footer.photo_footer')->withSuccess('Berhasil Ditambahkan!');
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
    public function edit(Photo_footer $photo_footer)
    {
        return view('backend.pages-footer.photo_footer-edit', ['photo_footer' => $photo_footer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Photo_footer $photo_footer)
    {
        $data = $request->all();

        if ($request->hasFile('photo_footer')) {
            if(Storage::get($photo_footer->photo)){
                Storage::delete($photo_footer->photo);
            }
            $file = $request->file('photo_footer');
            $data['photo_footer'] = Storage::putFileAs('public/photo', $file, $file->getClientOriginalName());
        }

        $photo_footer->update($data);
        return redirect('/pages-footer.photo_footer')->withSuccess('Berhasil di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo_footer $photo_footer)
    {
        if(Storage::get($photo_footer->photo)){
            Storage::delete($photo_footer->photo);
        }
        $photo_footer->delete();
        return redirect('/pages-footer.photo_footer')->withSuccess('Berhasil di Hapus!');
    }
}
