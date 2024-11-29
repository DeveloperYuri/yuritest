@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">Show Produk</h1>


        <h1>{{ $produks->nama }}</h1>
        <p>{{ $produks->deskripsi }}</p>

        <a class="btn btn btn-success mb-3" href="{{ route('crudbasic.index') }}">Kembali ke Dashboard</a>
        <a class="btn btn btn-warning mb-3" href="{{ route('crudbasic.edit', $produks->id) }}">Edit</a>


    </div>
@endsection
