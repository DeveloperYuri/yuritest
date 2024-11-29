@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="mt-5">Data Slug</h1>
        <div class="card">
            <div class="card-header">
                {{ $slug[0]->judul }}
            </div>
            <div class="card-body">
                <p>{{ $slug[0]->isi }}</p>
            </div>
        </div>
    </div>    
@endsection