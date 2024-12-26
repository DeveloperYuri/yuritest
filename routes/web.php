<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeControllerSlug;
use App\Http\Controllers\ProdukImageController;
use App\Http\Controllers\ProdukImageSlugController;
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
Route::get('/slug/{id}/edit', [HomeControllerSlug::class, 'edit'])->name('slug.edit');
Route::put('/slug/update/{id}', [HomeControllerSlug::class, 'update'])->name('slug.update');
Route::delete('/slug/delete/{id}', [HomeControllerSlug::class, 'destroy'])->name('slug.destroy');
Route::get('/slug/show/{id}', [HomeControllerSlug::class, 'show'])->name('slug.show');

// CRUD Basic + Image 
Route::get('/crudimagebasic', [ProdukImageController::class, 'index'])->name('crudimagebasic.index');
Route::get('/crudimagebasic/create', [ProdukImageController::class, 'create'])->name('crudimagebasic.create');
Route::post('/crudimagebasicpost', [ProdukImageController::class, 'store'])->name('crudimagebasic.store');
Route::get('/crudimagebasic/{id}/edit', [ProdukImageController::class, 'edit'])->name('crudimagebasic.edit');
Route::put('/crudimagebasic/update/{id}', [ProdukImageController::class, 'update'])->name('crudimagebasic.update');
Route::delete('/crudimagebasic/delete/{id}', [ProdukImageController::class, 'destroy'])->name('crudimagebasic.destroy');
Route::get('/crudimagebasic/show/{id}', [ProdukImageController::class, 'show'])->name('crudimagebasic.show');

// CRUD Basic + Image + Slug
Route::get('/crudimagebasicslug', [ProdukImageSlugController::class, 'index'])->name('crudimagebasicslug.index');
Route::get('/crudimagebasicslug/create', [ProdukImageSlugController::class, 'create'])->name('crudimagebasicslug.create');
Route::post('/crudimagebasicslugpost', [ProdukImageSlugController::class, 'store'])->name('crudimagebasicslug.store');
Route::get('/crudimagebasicslug/{id}/edit', [ProdukImageSlugController::class, 'edit'])->name('crudimagebasicslug.edit');
Route::put('/crudimagebasicslug/update/{id}', [ProdukImageSlugController::class, 'update'])->name('crudimagebasicslug.update');
Route::delete('/crudimagebasicslug/delete/{id}', [ProdukImageSlugController::class, 'destroy'])->name('crudimagebasicslug.destroy');
Route::get('/crudimagebasicslug/show/{id}', [ProdukImageSlugController::class, 'show'])->name('crudimagebasicslug.show');