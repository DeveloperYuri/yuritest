@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="mt-5 text-center">Edit CRUD + Slug</h1>

        <a href="{{ route('slug.index') }}" class="btn btn-success mb-3">Kembali</a>

        <div class="card">

            <div class="card-header">
                Ubah Slug 
            </div>
            <div class="card-body">
                <form action="{{ route('slug.update', $slug->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Judul Slug</label>
                        <input type="text" name="judul" class="form-control" value="{{ $slug->judul }}">
                    </div>
                    <div class="mb-3">
                        <label>Isi Slug</label>
                        <textarea name="isi" id="" cols="30" rows="10" class="form-control">{{ $slug->isi }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
