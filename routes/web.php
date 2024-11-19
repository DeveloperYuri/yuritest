<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//CRUD Basic
Route::get('/crud', [HomeController::class, 'index'])->name('crudbasic.index');
Route::get('/crudcreate', [HomeController::class, 'create'])->name('crudbasic.create');
Route::post('/storesave', [HomeController::class, 'store'])->name('crudbasic.store');
Route::delete('/produk/delete{id}', [HomeController::class, 'destroy'])->name('crudbasic.destroy');
Route::get('/produk/edit{id}', [HomeController::class, 'edit'])->name('crudbasic.edit');
Route::put('/produk/update{id}', [HomeController::class, 'update'])->name('crudbasic.update');