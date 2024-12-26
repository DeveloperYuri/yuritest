@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="mt-5">Data Slug</h1>
        
        <a href="{{ route('slug.index') }}" class="btn btn-success mb-3">Kembali</a>

        <div class="card">
            <div class="card-header">
                {{ $slug[0]->image }}
            </div>
            <div class="card-body">
                <p>{{ $slug[0]->description }}</p>
            </div>
        </div>
    </div>    
@endsection