<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\detailTransaksiController;
use App\Http\Controllers\jenisTelurController;
use App\Http\Controllers\telurController;
use App\Http\Controllers\transaksiController;
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
    return view('index');
});

// admin route 
Route::get('/admin', [adminController::class, 'index']);
Route::get('/admin/create', [adminController::class, 'createview']);
Route::post('/admin', [adminController::class, 'create']);
Route::get('/admin/update/{id}', [adminController::class, 'updateview']);
Route::delete('/admin/{id}', [adminController::class, 'destroy']);
Route::put('/admin/{id}', [adminController::class, 'update']);

// Jenis Telur Route 
Route::get('/jenis-telur', [jenisTelurController::class, 'index']);
Route::get('/jenis-telur/create', [jenisTelurController::class, 'createview']);
Route::post('/jenis-telur', [jenisTelurController::class, 'create']);
Route::get('/jenis-telur/update/{id}', [jenisTelurController::class, 'updateview']);
Route::delete('/jenis-telur/{id}', [jenisTelurController::class, 'destroy']);
Route::put('/jenis-telur/{id}', [jenisTelurController::class, 'update']);
Route::get('/jenis-telur/restore/', [jenisTelurController::class, 'restoreview']);
Route::post('/jenis-telur/{id}', [jenisTelurController::class, 'restore']);

// Telur Route 
Route::get('/telur', [telurController::class, 'index']);
Route::get('/telur/create', [telurController::class, 'createview']);
Route::post('/telur', [telurController::class, 'create']);
Route::get('/telur/update/{id}', [telurController::class, 'updateview']);
Route::delete('/telur/{id}', [telurController::class, 'destroy']);
Route::put('/telur/{id}', [telurController::class, 'update']);

// Transaksi Route 
Route::get('/transaksi', [transaksiController::class, 'index']);
Route::get('/transaksi/create', [transaksiController::class, 'createview']);
Route::post('/transaksi', [transaksiController::class, 'create']);
Route::get('/transaksi/update/{id}', [transaksiController::class, 'updateview']);
Route::delete('/transaksi/{id}', [transaksiController::class, 'destroy']);
Route::put('/transaksi/{id}', [transaksiController::class, 'update']);

//Detail Transaksi Route 
// Route::get('/detail-transaksi', [detailTransaksiController::class, 'index']);
Route::get('/detail-transaksi/{id}', [detailTransaksiController::class, 'createview']);
Route::post('/detail-transaksi/{id}', [detailTransaksiController::class, 'create']);
Route::get('/detail-transaksi/update/{id}', [detailTransaksiController::class, 'updateview']);
Route::delete('/detail-transaksi/{id}/{trx}', [detailTransaksiController::class, 'destroy']);
Route::put('/detail-transaksi/{id}', [detailTransaksiController::class, 'update']);
Route::get('/detail-transaksi/hargaPerTelur/{id}', [detailTransaksiController::class, 'SatuanHarga']);

