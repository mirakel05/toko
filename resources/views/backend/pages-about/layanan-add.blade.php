@extends('backend/layouts/main')
@section('content')
    <h1 class="text-center">Halaman Tambah</h1>
    <div class="container">
        <div class="mt-5 col-8 m-auto">
            <form action="/pages-about.layanan-add" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="logo">Logo</label>
                    <input type="text" class="form-control" name="logo" id="logo" required>
                </div>
                <div class="mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" required>
                </div>
                <div class="mb-3">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" id="keterangan" required>
                </div>
                <div class="mb-3 mt-5">
                    <button class="btn btn-success" type="submit">{{ isset($layanan) ? 'Update' : 'Tambah' }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
