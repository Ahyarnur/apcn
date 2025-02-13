<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/beranda', [BeritaController::class, 'beranda'])->name('beranda');
Route::get('/tambah', [BeritaController::class, 'tambah'])->name('tambah');
Route::post('/create', [BeritaController::class, 'create'])->name('create');
Route::get('/showdata', [BeritaController::class, 'showdata'])->name('showdata');
Route::get('/delete/{id}', [BeritaController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [BeritaController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [BeritaController::class, 'update'])->name('update');
Route::get('/detail/{id}', [BeritaController::class, 'detail'])->name('detail');





