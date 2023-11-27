<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero = Hero::all();
        return view('backend.pages-home.hero', compact('hero'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages-home.hero-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Hero $hero)
    {
        $data = $request->all();

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $data['photo'] = Storage::putFileAs('public/photo', $file, $file->getClientOriginalName());
        }

        $hero->create($data);
        return redirect('/pages-home.hero')->withSuccess('Berhasil Ditambahkan!');
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
    public function edit(Hero $hero)
    {
        return view('backend.pages-home.hero-edit', ['hero' => $hero]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hero $hero)
    {
        $data = $request->all();

        if ($request->hasFile('photo')) {
            if(Storage::get($hero->photo)){
                Storage::delete($hero->photo);
            }
            $file = $request->file('photo');
            $data['photo'] = Storage::putFileAs('public/photo', $file, $file->getClientOriginalName());
        }

        $hero->update($data);
        return redirect('/pages-home.hero')->withSuccess('Berhasil di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        if(Storage::get($hero->photo)){
            Storage::delete($hero->photo);
        }
        $hero->delete();
        return redirect('/pages-home.hero')->withSuccess('Berhasil di Hapus!');
    }
}
