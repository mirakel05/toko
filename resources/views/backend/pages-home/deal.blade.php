@extends('backend/layouts/main')
@section('content')
    <div class="container">
        <table class="table" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Harga1</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deal as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>{{ $data->harga1 }}</td>
                        <td><img src="{{ Storage::url($data->photo) }}" alt="" height="150px" width="150px"></td>
                        <td>
                            <a href="/pages-home.deal-edit/{{ $data->id }}" class="btn btn-primary">Edit</a>
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
