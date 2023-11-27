<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanan = Layanan::all();
        return view('backend.pages-about.layanan', compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages-about.layanan-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Layanan $layanan)
    {
        $data = $request->all();
        $layanan->create($data);
        return redirect('/pages-about.layanan')->withSuccess('Berhasil Ditambahkan!');
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
    public function edit(Layanan $layanan)
    {
        return view('backend.pages-about.layanan-edit', ['layanan' => $layanan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Layanan $layanan)
    {
        $data = $request->all();
        $layanan->update($data);
        return redirect('/pages-about.layanan')->withSuccess('Berhasil di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Layanan $layanan)
    {
        $layanan->delete();
        return redirect('/pages-about.layanan')->withSuccess('Berhasil di Hapus!');
    }
}
