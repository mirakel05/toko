<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deal;
use Illuminate\Support\Facades\Storage;

class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deal = Deal::all();
        return view('backend.pages-home.deal', compact('deal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('backend.pages-home.deal-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Deal $deal)
    {
        // $data = $request->all();

        // if ($request->hasFile('photo')) {
        //     $file = $request->file('photo');
        //     $data['photo'] = Storage::putFileAs('public/photo', $file, $file->getClientOriginalName());
        // }

        // $deal->create($data);
        // return redirect('/pages-home.deal');
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
    public function edit(Deal $deal)
    {
        return view('backend.pages-home.deal-edit', ['deal' => $deal]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Deal $deal)
    {
        $data = $request->all();

        if ($request->hasFile('photo')) {
            if(Storage::get($deal->photo)){
                Storage::delete($deal->photo);
            }
            $file = $request->file('photo');
            $data['photo'] = Storage::putFileAs('public/photo', $file, $file->getClientOriginalName());
        }

        $deal->update($data);
        return redirect('/pages-home.deal')->withSuccess('Berhasil Di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Deal $deal)
    {

    }
}
