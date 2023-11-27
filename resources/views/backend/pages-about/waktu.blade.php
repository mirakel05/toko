@extends('backend/layouts/main')
@section('content')
    <div class="container">
        <a href="/pages-about.waktu-add" class="btn btn-success mb-5">+ Tambah</a>
        <table class="table" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Waktu</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($waktu as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->waktu }}</td>
                        <td>
                            <a href="/pages-about.waktu-edit/{{ $data->id }}" class="btn btn-primary">Edit</a>
                            <a href="/pages-about.waktu-delete/{{ $data->id }}" onclick="return confirm('Yakin Hapus?')"
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
