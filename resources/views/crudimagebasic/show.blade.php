@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">Show CRUD Basic + Image</h1>


        <img src="{{ asset('/storage/produkimage/' . $produkimage->image) }}" class="img-fluid" alt="..." width="300px" height="300px">
        <p>{{ $produkimage->description }}</p>

        <a class="btn btn btn-success mb-3" href="{{ route('crudimagebasic.index') }}">Kembali ke Dashboard</a>
        <a class="btn btn btn-warning mb-3" href="{{ route('crudimagebasic.edit', $produkimage->id) }}">Edit</a>


    </div>
@endsection
