<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sejarah;
use Illuminate\Support\Facades\Storage;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sejarah = Sejarah::all();
        return view('backend.pages-about.sejarah', compact('sejarah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages-about.sejarah-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Sejarah $sejarah)
    {
        $data = $request->all();

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $data['photo'] = Storage::putFileAs('public/photo', $file, $file->getClientOriginalName());
        }

        $sejarah->create($data);
        return redirect('/pages-about.sejarah')->withSuccess('Berhasil Ditambahkan!');
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
    public function edit(Sejarah $sejarah)
    {
        return view('backend.pages-about.sejarah-edit', ['sejarah' => $sejarah]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sejarah $sejarah)
    {
        $data = $request->all();

        if ($request->hasFile('photo')) {
            if(Storage::get($sejarah->photo)){
                Storage::delete($sejarah->photo);
            }
            $file = $request->file('photo');
            $data['photo'] = Storage::putFileAs('public/photo', $file, $file->getClientOriginalName());
        }

        $sejarah->update($data);
        return redirect('/pages-about.sejarah')->withSuccess('Berhasil di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sejarah $sejarah)
    {
        if(Storage::get($sejarah->photo)){
            Storage::delete($sejarah->photo);
        }
        $sejarah->delete();
        return redirect('/pages-about.sejarah')->withSuccess('Berhasil di Hapus!');
    }
}
