@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3 mb-4">CRUD BASIC FULL COMPONENT INPUT</h1>

        <a class="btn btn btn-primary mb-3" href="{{ route('crudinputlengkap.create')}}">Tambah Produk</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col" class="text-center">Category</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                @forelse ($produkinputlengkap as $pil)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $pil->nama }}</td>
                        <td class="text-center">{{ $pil->category }}</td>

                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                action="" method="POST">
                                <a href="" class="btn btn-sm btn-dark">SHOW</a>
                                <a href="" class="btn btn-sm btn-primary">EDIT</a>
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
