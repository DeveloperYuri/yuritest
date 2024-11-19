@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="text-center mt-2">Edit Produk</h1>
        <form action="{{ route('crudbasic.update', $id->id) }}" method="POST">
            @method("PUT")
            @csrf
            <div class="form-group">
                <label for="nama">Nama Depan:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $id->nama }}">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $id->deskripsi }}">
            </div>
            
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>
@endsection