@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3 mb-4">CRUD BASIC test colaborate github edit</h1>

        <a class="btn btn btn-primary mb-3" href="{{ route('crudbasic.create')}}">Tambah Produk</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col" class="text-center">Deskripsi</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                @forelse ($produks as $produk)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $produk->nama }}</td>
                        <td class="text-center">{{ $produk->deskripsi }}</td>

                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                action="{{ route('crudbasic.destroy', $produk->id) }}" method="POST">
                                <a href="" class="btn btn-sm btn-dark">SHOW</a>
                                <a href="{{ route('crudbasic.edit', $produk->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                        </td>

                    </tr>
                @empty
                    <div class="alert alert-danger">
                        Data Products belum Tersedia.
                    </div>
                @endforelse
            </tbody>
            </tbody>
        </table>
    </div>
@endsection
