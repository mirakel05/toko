<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waktu;

class WaktuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $waktu = Waktu::all();
        return view('backend.pages-about.waktu', compact('waktu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages-about.waktu-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Waktu $waktu)
    {
        $data = $request->all();
        $waktu->create($data);
        return redirect('/pages-about.waktu')->withSuccess('Berhasil Ditambahkan!');
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
    public function edit(Waktu $waktu)
    {
        return view('backend.pages-about.waktu-edit', ['waktu' => $waktu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Waktu $waktu)
    {
        $data = $request->all();
        $waktu->update($data);
        return redirect('/pages-about.waktu')->withSuccess('Berhasil di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Waktu $waktu)
    {
        $waktu->delete();
        return redirect('/pages-about.waktu')->withSuccess('Berhasil di Hapus!');
    }
}
