@extends('backend/layouts/main')
@section('content')
    <h1 class="text-center">Halaman Edit</h1>
    <div class="container">
        <div class="mt-5 col-8 m-auto">
            <form action="/pages-contact.kontak-update/{{ $kontak->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" value="{{ $kontak->judul }}"
                        required>
                </div>
                <div class="mb-3">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" name="isi" id="isi"
                        value="{{ $kontak->isi }}" required>
                </div>
                <div class="mb-3 mt-5">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
