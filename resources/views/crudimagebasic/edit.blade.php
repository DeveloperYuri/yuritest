@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">Edit Produk CRUD Basic + Image</h1>

        <a class="btn btn btn-success mb-3" href="{{ route('crudimagebasic.index') }}">Kembali</a>

        <form action="{{ route('crudimagebasic.update', $produkimage->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label class="font-weight-bold">IMAGE</label>
                <input type="file" class="form-control" name="image" value="{{ old('image', $produkimage->image)}}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('image', $produkimage->description)}}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection
