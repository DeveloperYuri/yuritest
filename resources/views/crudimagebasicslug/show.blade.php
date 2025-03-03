@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="mt-5">Data Slug</h1>
        
        <a href="{{ route('crudimagebasicslug.index') }}" class="btn btn-success mb-3">Kembali</a>

        {{-- <img src="{{ asset('produkimageslug/nJy3BGdJdgdlnN5s18Njo510xWHnP2GuxlhAjzoC.png')}}" alt=""> --}}

        <div class="card">
            <div class="card-body">
                <p>{{ $getDescription }}</p>

                <img src="{{ asset('/storage/produkimageslug/' . $getImage) }}" class="img-fluid" alt="..." width="300px" height="300px">
            
            </div>
        </div>
    </div>    
@endsection