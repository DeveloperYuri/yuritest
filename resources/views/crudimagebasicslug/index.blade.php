@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="mt-5 text-center mb-4">CRUD Basic + Image + Slug</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produkimageslug as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('/storage/produkimageslug/' . $p->image) }}"
                                class="rounded" style="width: 100px" height="70px">
                        </td>
                        <td>{{ $p->description }}</td>
                        <td>{{ $p->slug }}</td>
                        <td>
                            <form action="{{ route('crudimagebasicslug.destroy', $p->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                                <a href="{{ route('crudimagebasicslug.edit', $p->id)}}" class="btn btn-warning">Ubah</a>
                                <a href="{{ route('crudimagebasicslug.show', $p->slug)}}" class="btn btn-info">Lihat</a>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <a href="{{ route('crudimagebasicslug.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
@endsection
