<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontak = Kontak::all();
        return view('backend.pages-contact.kontak', compact('kontak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages-contact.kontak-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Kontak $kontak)
    {
        $data = $request->all();
        $kontak->create($data);
        return redirect('/pages-contact.kontak')->withSuccess('Berhasil Ditambahkan!');
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
    public function edit(Kontak $kontak)
    {
        return view('backend.pages-contact.kontak-edit', ['kontak' => $kontak]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kontak $kontak)
    {
        $data = $request->all();
        $kontak->update($data);
        return redirect('/pages-contact.kontak')->withSuccess('Berhasil di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kontak $kontak)
    {
        $kontak->delete();
        return redirect('/pages-contact.kontak')->withSuccess('Berhasil di Hapus!');
    }
}
