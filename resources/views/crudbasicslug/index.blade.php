@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="mt-5">Data Slug</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Slug</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($slug as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->judul }}</td>
                    <td>{{ $data->slug }}</td>
                    <td>
                        <form action="" method="POST"></form>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                        <a href="" class="btn btn-warning">Ubah</a>
                        <a href="{{ route('slug.show', $data->slug) }}" class="btn btn-info">Lihat</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <a href="{{ route('slug.create') }}" class="btn btn-primary">Tambah Data</a>
</div>
@endsection



