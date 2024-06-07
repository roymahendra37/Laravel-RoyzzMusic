<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GearController;

Route::get('/gear', [GearController::class, 'index']);
Route::get('/gear/tambah', [GearController::class, 'create']);
Route::post('/gear/store', [GearController::class, 'store']);
Route::get('/gear/edit/{id}', [GearController::class, 'edit']);
Route::put('/gear/update/{id}', [GearController::class, 'update']);
Route::get('/gear/hapus/{id}', [GearController::class, 'delete']);
Route::get('/gear/destroy/{id}', [GearController::class, 'destroy']);