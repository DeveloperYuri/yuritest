@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="mt-5 text-center mb-4">CRUD Basic + Image</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produkimage as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('/storage/produkimage/' . $p->image) }}"
                                class="rounded" style="width: 100px" height="70px">
                        </td>
                        <td>{{ $p->description }}</td>
                        <td>
                            <form action="{{ route('crudimagebasic.destroy', $p->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                                <a href="{{ route('crudimagebasic.edit', $p->id)}}" class="btn btn-warning">Ubah</a>
                                <a href="{{ route('crudimagebasic.show', $p->id)}}" class="btn btn-info">Lihat</a>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <a href="{{ route('crudimagebasic.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
@endsection