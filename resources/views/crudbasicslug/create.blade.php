@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="mt-5">Data Slug</h1>
        <div class="card">
            <div class="card-header">
                Tambah Slug Baru
            </div>
            <div class="card-body">
                <form action="{{ route('slug.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Judul Slug</label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Isi Slug</label>
                        <textarea name="isi" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
