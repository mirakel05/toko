@extends('backend/layouts/main')
@section('content')
    <div class="container">
        <table class="table" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Subjek</th>
                    <th>Pesan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contact as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->subjek }}</td>
                        <td>{{ $data->pesan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
