@extends('backend/layouts/main')
@section('content')
    <h1 class="text-center">Halaman Tambah</h1>
    <div class="container">
        <div class="mt-5 col-8 m-auto">
            <form action="/pages-footer.photo_footer-add" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="photo_footer">Photo_footer</label>
                    <input type="file" name="photo_footer" id="photo_footer" class="form-control">
                </div>
                <div class="mb-3 mt-5">
                    <button class="btn btn-success" type="submit">{{ isset($photo_footer) ? 'Update' : 'Tambah' }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
