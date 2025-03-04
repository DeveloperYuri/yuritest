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

            <fieldset class="form-group mb-3">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                    <div class="col-sm-12">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                First radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                Second radio
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
                                value="option3" disabled>
                            <label class="form-check-label" for="gridRadios3">
                                Third disabled radio
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1" value='1' name="checkbox">Check this custom checkbox</label>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>



            <button type="submit" class="btn btn-primary mt-3">Submit</button>

        </form>
    </div>
@endsection
