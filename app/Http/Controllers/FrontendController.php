<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Deal;
use App\Models\Photo;
use App\Models\Arrival;
use App\Models\Contact;
use App\Models\Review;
use App\Models\Produk;
use App\Models\Layanan;
use App\Models\Sejarah;
use App\Models\Waktu;
use App\Models\Kontak;
use App\Models\Photo_footer;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'hero' => Hero::all(),
            'deal' => Deal::all(),
            'photo' => Photo::all(),
            'arrival' => Arrival::all(),
            'review' => Review::all(),
            'kontak' => Kontak::all(),
            'sejarah' => Sejarah::all(),
            'photo_footer' => Photo_footer::all()
        ];
        return view('frontend.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function shop()
    {
        $data = [
            'produk' => Produk::all(),
            'kontak' => Kontak::all(),
            'sejarah' => Sejarah::all(),
            'photo_footer' => Photo_footer::all()
        ];
        return view('frontend.shop', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function about()
    {
        $data = [
            'layanan' => Layanan::all(),
            'sejarah' => Sejarah::all(),
            'waktu' => Waktu::all(),
            'kontak' => Kontak::all(),
            'photo_footer' => Photo_footer::all()
        ];
        return view('frontend.about', $data);
    }

    /**
     * Display the specified resource.
     */
    public function kontak()
    {
        $data = [
            'kontak' => Kontak::all(),
            'sejarah' => Sejarah::all(),
            'photo_footer' => Photo_footer::all()
        ];
        return view('frontend.contact', $data);
    }

    public function contact_add(Request $request)
    {
        $data = $request->all();
        Contact::create($data);
        return back()->withSuccess('berhasil!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function keranjang()
    {
        $data = [
            'sejarah' => Sejarah::all(),
            'photo_footer' => Photo_footer::all()
        ];
        return view('frontend.cart', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function pembelian()
    {
        $data = [
            'sejarah' => Sejarah::all(),
            'photo_footer' => Photo_footer::all()
        ];
        return view('frontend.checkout', $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
