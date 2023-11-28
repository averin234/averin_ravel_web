<?php

use App\Http\Controllers\ApidescriptionController;
use App\Http\Controllers\ApikaryawanController;
use App\Http\Controllers\ApiProdukController;
use App\Http\Controllers\ApiSuperioritysController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TentangKamiController;
use Illuminate\Support\Facades\Route;

Route::get('v1/APIproduk', [ApiProdukController::class, 'APIproduk']);
Route::get('v1/APISuperioritys', [ApiSuperioritysController::class, 'APISuperioritys']);
Route::get('v1/APIdescription', [ApidescriptionController::class, 'APIdescription']);
Route::get('v1/APIkaryawan', [ApikaryawanController::class, 'APIkaryawan']);
Route::get('/tentang_kami', [TentangKamiController::class, 'tentangkami']);
Route::get('/produk', [ProdukController::class, 'produk']);
Route::get('/kontak', [KontakController::class, 'kontak']);
Route::get('/', function () {
    return view('welcome');
});




