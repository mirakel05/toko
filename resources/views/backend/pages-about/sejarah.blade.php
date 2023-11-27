@extends('backend/layouts/main')
@section('content')
    <div class="container">
        <a href="/pages-about.sejarah-add" class="btn btn-success mb-5">+ Tambah</a>
        <table class="table" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Keterangan</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sejarah as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->judul }}</td>
                        <td>{{ $data->keterangan }}</td>
                        <td><img src="{{ Storage::url($data->photo) }}" alt="" height="150px" width="150px"></td>
                        <td>
                            <a href="/pages-about.sejarah-edit/{{ $data->id }}" class="btn btn-primary">Edit</a>
                            <a href="/pages-about.sejarah-delete/{{ $data->id }}"
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
