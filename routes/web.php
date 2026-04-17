<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\TransaksiController;

Route::get('/', [TransaksiController::class, 'index']);
Route::post('/simpan', [TransaksiController::class, 'store']);
Route::get('/hapus/{id}', [TransaksiController::class, 'delete']);

//UPDATE
Route::get('/edit/{id}', [TransaksiController::class, 'edit']);
Route::post('/update/{id}', [TransaksiController::class, 'update']);