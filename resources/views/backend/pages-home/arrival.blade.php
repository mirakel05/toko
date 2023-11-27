@extends('backend/layouts/main')
@section('content')
    <div class="container">
        <a href="/pages-home.arrival-add" class="btn btn-success mb-5">+ Tambah</a>
        <table class="table" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($arrival as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->harga }}</td>
                        <td><img src="{{ Storage::url($data->photo) }}" alt="" height="150px" width="150px"></td>
                        <td>
                            <a href="/pages-home.arrival-edit/{{ $data->id }}" class="btn btn-primary">Edit</a>
                            <a href="/pages-home.arrival-delete/{{ $data->id }}"
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
