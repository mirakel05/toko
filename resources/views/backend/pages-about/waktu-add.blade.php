@extends('backend/layouts/main')
@section('content')
    <h1 class="text-center">Halaman Tambah</h1>
    <div class="container">
        <div class="mt-5 col-8 m-auto">
            <form action="/pages-about.waktu-add" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="waktu">Waktu</label>
                    <input type="text" class="form-control" name="waktu" id="waktu" required>
                </div>
                <div class="mb-3 mt-5">
                    <button class="btn btn-success" type="submit">{{ isset($waktu) ? 'Update' : 'Tambah' }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
