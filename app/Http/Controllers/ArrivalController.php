<?php

namespace App\Http\Controllers;

use App\Models\Arrival;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArrivalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $arrival = Arrival::all();
        return view('backend.pages-home.arrival', compact('arrival'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages-home.arrival-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Arrival $arrival)
    {
        $data = $request->all();

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $data['photo'] = Storage::putFileAs('public/photo', $file, $file->getClientOriginalName());
        }

        $arrival->create($data);
        return redirect('/pages-home.arrival')->withSuccess('Berhasil Ditambahkan!');
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
    public function edit(Arrival $arrival)
    {
        return view('backend.pages-home.arrival-edit', ['arrival' => $arrival]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Arrival $arrival)
    {
        $data = $request->all();

        if ($request->hasFile('photo')) {
            if(Storage::get($arrival->photo)){
                Storage::delete($arrival->photo);
            }
            $file = $request->file('photo');
            $data['photo'] = Storage::putFileAs('public/photo', $file, $file->getClientOriginalName());
        }

        $arrival->update($data);
        return redirect('/pages-home.arrival')->withSuccess('Berhasil Di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Arrival $arrival)
    {
        if(Storage::get($arrival->photo)){
            Storage::delete($arrival->photo);
        }
        $arrival->delete();
        return redirect('/pages-home.arrival')->withSuccess('Berhasil Di Hapus!');
    }
}
