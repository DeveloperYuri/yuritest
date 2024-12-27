@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="mt-5 text-center mb-4">CRUD Basic + Image + Searcing</h1>
        
        <form method="GET">
            <div class="input-group mb-3">
              <input 
                type="text" 
                name="search" 
                value="{{ request()->get('search') }}" 
                class="form-control" 
                placeholder="Search..." 
                aria-label="Search" 
                aria-describedby="button-addon2">
              <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
            </div>
        </form>
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produkimagesearching as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('/storage/produkimagesearching/' . $p->image) }}"
                                class="rounded" style="width: 100px" height="70px">
                        </td>
                       
                        <td>{{ $p->description }}</td>
                        <td>
                            <form action="{{ route('crudimagebasicsearching.destroy', $p->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                                <a href="{{ route('crudimagebasicsearching.edit', $p->id)}}" class="btn btn-warning">Ubah</a>
                                <a href="#" class="btn btn-info">Lihat</a>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <a href="{{ route('crudimagebasicsearching.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
@endsection
