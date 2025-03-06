@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">Tambah Produk halaman create</h1>

        <a class="btn btn btn-success mb-3" href="{{ route('crudbasic.index') }}">Kembali</a>

        <form action="{{ route('crudbasic.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama">
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi">
            </div>

            <div class="col-12 mb-3">
                <label for="inputNanme4" class="form-label">Category</label>
                <select class="form-control" name="category" id="">
                    <option value="">Select Category</option>
                    <option value="satu">Satu</option>
                    <option value="dua">Dua</option>
                    <option value="tiga">Tiga</option>
                </select>
            </div>

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

            {{-- @foreach ($errors->all() as $error)
                <li style="color: red">{{ $error }}</li>
            @endforeach --}}



            <button type="submit" class="btn btn-primary mt-3">Submit</button>

        </form>
    </div>
@endsection
