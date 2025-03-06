@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="text-center mt-2">Edit Produk</h1>

        <a href="{{ route('crudbasic.index') }}" class="btn btn-success mb-3">Kembali</a>

        <form action="{{ route('crudbasic.update', $id->id) }}" method="POST">
            @method("PUT")
            @csrf
            <div class="form-group">
                <label for="nama">Nama Depan:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $id->nama }}">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $id->deskripsi }}">
            </div>
{{-- 
            <div class="col-12 mb-3">
                <label for="inputNanme4" class="form-label">Category</label>
                <select class="form-control" name="category" id="">
                    <option value="">Select Category</option>
                    <option {{ $getRecord->status == "satu" ? 'selected' : '' }} value="satu" value="satu">Satu</option>
                    <option {{ $getRecord->status == "dua" ? 'selected' : '' }}  value="dua" value="satu">Satu</option>
                    <option {{ $getRecord->status == "tiga" ? 'selected' : '' }} value="tiga" value="satu">Satu</option>
                </select>
            </div> --}}

            <div class="row mb-3">
                <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                <div class="col-sm-12">
                    <input type="date" class="form-control" name="date">
                </div>
            </div>

            <div>
                <h4>Users Skill</h4>
                <input type="checkbox" name="input_checkbox" value="php"><label for="">PHP</label>
                <input type="checkbox" name="input_checkbox" value="java"><label for="">Java</label>
                <input type="checkbox" name="input_checkbox" value="python"><label for="">Python</label>
            </div>

            <div>
                <h4>Radio Button</h4>
                <input type="radio" name="input_radio" value="yes"><label for="">Yes</label>
                <input type="radio" name="input_radio" value="no"><label for="">No</label>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="input_textarea"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>
@endsection