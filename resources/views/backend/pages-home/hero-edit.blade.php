@extends('backend/layouts/main')
@section('content')
    <h1 class="text-center">Halaman Edit</h1>
    <div class="container">
        <div class="mt-5 col-8 m-auto">
            <form action="/pages-home.hero-update/{{ $hero->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" value="{{ $hero->judul }}"
                        required>
                </div>
                <div class="mb-3">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" id="keterangan"
                        value="{{ $hero->keterangan }}" required>
                </div>
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" id="photo" value="{{ $hero->photo }}" class="form-control">
                </div>
                <div class="mb-3 mt-5">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
