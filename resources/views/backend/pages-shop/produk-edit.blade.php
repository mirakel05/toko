@extends('backend/layouts/main')
@section('content')
    <h1 class="text-center">Halaman Edit</h1>
    <div class="container">
        <div class="mt-5 col-8 m-auto">
            <form action="/pages-shop.produk-update/{{ $produk->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{ $produk->nama }}"
                        required>
                </div>
                <div class="mb-3">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" name="harga" id="harga" value="{{ $produk->harga }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" id="photo" value="{{ $produk->photo }}" class="form-control">
                </div>
                <div class="mb-3 mt-5">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
