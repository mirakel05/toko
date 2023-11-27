@extends('backend/layouts/main')
@section('content')
    <div class="container">
        <a href="/pages-home.review-add" class="btn btn-success mb-5">+ Tambah</a>
        <table class="table" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($review as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->keterangan }}</td>
                        <td>
                            <a href="/pages-home.review-edit/{{ $data->id }}" class="btn btn-primary">Edit</a>
                            <a href="/pages-home.review-delete/{{ $data->id }}" onclick="return confirm('Yakin Hapus?')"
                                class="btn btn-danger">Delete</a>
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
