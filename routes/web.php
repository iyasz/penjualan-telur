<?php

use App\Http\Controllers\adminController;
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
