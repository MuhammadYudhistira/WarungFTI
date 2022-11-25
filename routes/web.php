<?php

use App\Http\Controllers\BarangController;
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


Route::get('/barang/list', [BarangController::class, 'index']);
Route::post('/barang', [BarangController::class, 'store']);
Route::get('/barang/create', [BarangController::class, 'create']);
Route::get('/barang/{barang}', [BarangController::class, 'destroy']);
Route::put('/barang/{barang}', [BarangController::class, 'update']);
Route::get('/barang/{barang}/edit', [BarangController::class, 'edit']);
