<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeControllerSlug;
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
Route::get('/produk/show/{id}', [HomeController::class, 'show'])->name('crudbasic.show');

//CRUD Basic + Slug
Route::get('/slug', [HomeControllerSlug::class, 'index'])->name('slug.index');
Route::get('/slug/create', [HomeControllerSlug::class, 'create'])->name('slug.create');
Route::post('/slug', [HomeControllerSlug::class, 'store'])->name('slug.store');
Route::get('/slug/{id}/edit', [HomeControllerSlug::class, 'update'])->name('slug.update');
Route::delete('/slug/delete/{id}', [HomeControllerSlug::class, 'destroy'])->name('slug.destroy');
Route::get('/slug/show/{id}', [HomeControllerSlug::class, 'show'])->name('slug.show');