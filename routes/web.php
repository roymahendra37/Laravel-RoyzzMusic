<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GearController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sesi', [SessionController::class,'index'])->name('sesi.index');
Route::post('/sesi/login', [SessionController::class,'login']);
Route::get('/sesi/logout', [SessionController::class,'logout']);
Route::get('/sesi/register', [SessionController::class,'register']);
Route::post('/sesi/create', [SessionController::class,'create']);

Route::get('/gear', [GearController::class, 'index']);
Route::get('/gear/tambah', [GearController::class, 'create']);
Route::post('/gear/store', [GearController::class, 'store']);
Route::get('/gear/edit/{id}', [GearController::class, 'edit']);
Route::put('/gear/update/{id}', [GearController::class, 'update']);
Route::get('/gear/hapus/{id}', [GearController::class, 'delete']);
Route::get('/gear/destroy/{id}', [GearController::class, 'destroy']);
Route::get('/gear/cetak', [GearController::class, 'cetak']);

Route::get('/reservasi', [ReservasiController::class, 'index']);
Route::post('/reservasi/store', [ReservasiController::class, 'store']);
Route::get('/reservasi/hapus/{id}', [ReservasiController::class, 'delete']);
Route::get('/reservasi/destroy/{id}', [ReservasiController::class, 'destroy']);
Route::get('/reservasi/cetak', [ReservasiController::class, 'cetak']);

Route::get('/admin', [AdminController::class, 'index']);