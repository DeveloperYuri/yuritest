@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">Tambah Produk CRUD Basic Full Component Input</h1>

        <a class="btn btn btn-success mb-3" href="{{ route('crudimagebasic.index') }}">Kembali</a>

        <form action="{{ route('crudimagebasicslug.store') }}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Category</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Category</option>
                    <option value="One">One</option>
                    <option value="Two">Two</option>
                    <option value="Three">Three</option>
                </select>
            </div>

            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        No
                    </label>
                </div>
            </div>

            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Comments</label>
                </div>
            </div>


            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Active
                    </label>
                </div>
            </div>

            <!--
                                        <div class="row">
                                            <select class="selectbox" name="is_role" id="" required>

                                                <option value="">Select Role</option>
                                                <option {{ old('is_role') == '2' ? 'selected' : '' }} value="2">Super Admin</option>
                                                <option {{ old('is_role') == '1' ? 'selected' : '' }} value="1">Admin</option>
                                            </select>
                                        </div>
                                    -->

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection
