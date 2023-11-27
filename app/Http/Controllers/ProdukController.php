<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        return view('backend.pages-shop.produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages-shop.produk-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Produk $produk)
    {
        $data = $request->all();

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $data['photo'] = Storage::putFileAs('public/photo', $file, $file->getClientOriginalName());
        }

        $produk->create($data);
        return redirect('/pages-shop.produk')->withSuccess('Berhasil Ditambahkan!');
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
    public function edit(Produk $produk)
    {
        return view('backend.pages-shop.produk-edit', ['produk' => $produk]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $data = $request->all();

        if ($request->hasFile('photo')) {
            if(Storage::get($produk->photo)){
                Storage::delete($produk->photo);
            }
            $file = $request->file('photo');
            $data['photo'] = Storage::putFileAs('public/photo', $file, $file->getClientOriginalName());
        }

        $produk->update($data);
        return redirect('/pages-shop.produk')->withSuccess('Berhasil di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        if(Storage::get($produk->photo)){
            Storage::delete($produk->photo);
        }
        $produk->delete();
        return redirect('/pages-shop.produk')->withSuccess('Berhasil di Hapus!');
    }
}
