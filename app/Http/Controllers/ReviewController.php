<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $review = Review::all();
        return view('backend.pages-home.review', compact('review'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages-home.review-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Review $review)
    {
        $data = $request->all();
        $review->create($data);
        return redirect('/pages-home.review')->withSuccess('Berhasil Ditambahkan!');
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
    public function edit(Review $review)
    {
        return view('backend.pages-home.review-edit', ['review' => $review]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $data = $request->all();
        $review->update($data);
        return redirect('/pages-home.review')->withSuccess('Berhasil di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();
        return redirect('/pages-home.review')->withSuccess('Berhasil di Hapus!');
    }
}
