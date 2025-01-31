@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="mt-5 text-center mb-4">CRUD Basic + Image + Searcing</h1>
       
        <h1>{{ $produkimagesearching }}</h1>

        <a href="{{ route('crudimagebasicsearching.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
@endsection
