@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">Tambah Produk</h1>

        <a class="btn btn btn-success mb-3" href="{{ route('crudbasic.index') }}">Kembali</a>

        <form action="{{ route('crudbasic.store') }}" method="POST">
            @csrf
             <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection
