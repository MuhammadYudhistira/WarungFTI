<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [Authcontroller::class, 'Customlogin'])->name("Login");
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'Logout']);


    Route::get('/barang/list', [BarangController::class, 'index']);
    Route::post('/barang', [BarangController::class, 'store']);
    Route::get('/barang/create', [BarangController::class, 'create']);
    Route::get('/barang/{barang}', [BarangController::class, 'destroy']);
    Route::put('/barang/{barang}', [BarangController::class, 'update']);
    Route::get('/barang/{barang}/edit', [BarangController::class, 'edit']);

    Route::get('/user/list',[UserController::class, 'index']);

    Route::get('/penjualan/list', [PenjualanController::class, 'index']);
    Route::get('/penjualan/create', [PenjualanController::class, 'create']);
    Route::post('/penjualan', [PenjualanController::class, 'store']);

    Route::get('/pembelian/list', [PembelianController::class, 'index']);
    Route::get('/pembelian/create', [PembelianController::class, 'create']);
    Route::post('/pembelian', [PembelianController::class, 'store']);
