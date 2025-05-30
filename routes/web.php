<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeControllerSlug;
use App\Http\Controllers\HomeSearchingController;
use App\Http\Controllers\ProdukImageController;
use App\Http\Controllers\ProdukImageSearchingController;
use App\Http\Controllers\ProdukImageSlugController;
use App\Http\Controllers\ProdukInputLengkapController;
use App\Http\Controllers\UserController;
use App\Models\ProdukImageSearching;
use App\Models\ProdukInputLengkap;
use Illuminate\Support\Facades\Route;

//CRUD Basic
// Route::get('/crud', [HomeController::class, 'index'])->name('crudbasic.index');
// Route::get('/crudcreate', [HomeController::class, 'create'])->name('crudbasic.create');
// Route::post('/storesave', [HomeController::class, 'store'])->name('crudbasic.store');
// Route::delete('/produk/delete{id}', [HomeController::class, 'destroy'])->name('crudbasic.destroy');
// Route::get('/produk/edit{id}', [HomeController::class, 'edit'])->name('crudbasic.edit');
// Route::put('/produk/update{id}', [HomeController::class, 'update'])->name('crudbasic.update');
// Route::get('/produk/show/{id}', [HomeController::class, 'show'])->name('crudbasic.show');

Route::group(['middleware' => 'login'], function () {
    Route::get('/crud', [HomeController::class, 'index'])->name('crudbasic.index');
    Route::get('/crudcreate', [HomeController::class, 'create'])->name('crudbasic.create');
    Route::post('/storesave', [HomeController::class, 'store'])->name('crudbasic.store');
    Route::delete('/produk/delete{id}', [HomeController::class, 'destroy'])->name('crudbasic.destroy');
    Route::get('/produk/edit{id}', [HomeController::class, 'edit'])->name('crudbasic.edit');
    Route::put('/produk/update{id}', [HomeController::class, 'update'])->name('crudbasic.update');
    Route::get('/produk/show/{id}', [HomeController::class, 'show'])->name('crudbasic.show');
});

//CRUD Basic Searching
Route::get('/crudsearching', [HomeSearchingController::class, 'index'])->name('crudbasicsearching.index');

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
// Route::get('/{slug}', [ProdukImageSlugController::class, 'show'])->name('crudimagebasicslug.show');

// CRUD Basic + Image + Searcing
Route::get('/crudimagebasicsearching', [ProdukImageSearchingController::class, 'index'])->name('crudimagebasicsearching.index');
Route::get('/crudimagebasicsearching/create', [ProdukImageSearchingController::class, 'create'])->name('crudimagebasicsearching.create');
Route::post('/crudimagebasicsearchingpost', [ProdukImageSearchingController::class, 'store'])->name('crudimagebasicsearching.store');
Route::get('/crudimagebasicsearching/{id}/edit', [ProdukImageSearchingController::class, 'edit'])->name('crudimagebasicsearching.edit');
Route::put('/crudimagebasicsearching/update/{id}', [ProdukImageSearchingController::class, 'update'])->name('crudimagebasicsearching.update');
Route::delete('/crudimagebasicsearching/delete/{id}', [ProdukImageSearchingController::class, 'destroy'])->name('crudimagebasicsearching.destroy');
// Route::get('/crudimagebasicsearching/show/{id}', [ProdukImageSearchingController::class, 'show'])->name('crudimagebasicsearching.show');

// User
Route::get('users', [UserController::class, 'index']);

// CRUD Input Lengkap
Route::get('/crudinputlengkap', [ProdukInputLengkapController::class, 'index'])->name('crudinputlengkap.index');
Route::get('/crudinputlengkap/create', [ProdukInputLengkapController::class, 'create'])->name('crudinputlengkap.create');
Route::post('/crudinputlengkap/post', [ProdukInputLengkapController::class, 'store'])->name('crudinputlengkap.store');


// Login Register
Route::get('/', [AuthController::class, 'login'])->name('indexlogin');
Route::post('/loginpost', [AuthController::class, 'loginpost'])->name('loginpost');
Route::get('/registration', [AuthController::class, 'register'])->name('indexregister');
Route::post('/registrationpost', [AuthController::class, 'store'])->name('registerpost');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [AuthController::class, 'index'])->name('indexdashboard');
