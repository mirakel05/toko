@extends('backend/layouts/main')
@section('content')
    <div class="container">
        <a href="/pages-contact.kontak-add" class="btn btn-success mb-5">+ Tambah</a>
        <table class="table" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kontak as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->judul }}</td>
                        <td>{{ $data->isi }}</td>
                        <td>
                            <a href="/pages-contact.kontak-edit/{{ $data->id }}" class="btn btn-primary">Edit</a>
                            <a href="/pages-contact.kontak-delete/{{ $data->id }}"
                                onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                text: '{{ session('success') }}'
            })
        </script>
    @endif
@endsection
