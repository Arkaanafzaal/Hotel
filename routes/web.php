<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\LimarController;

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
//user
Route::get('/', function () {
    return view('home');
});
Route::get('/form', [PesanController::class, 'create']);
Route::get('/tabel', [PesanController::class, 'index']);
Route::post('/save', [PesanController::class, 'store'])->name('simpan');
//admin
Route::get('/admin', function () {
    return view('navbar');
});
//fasilitas kamar
Route::get('/fasilitaskamar', [LimarController::class, 'index']);
Route::get('/tambahlimar', [LimarController::class, 'create']);
Route::post('/savelimar', [LimarController::class, 'store'])->name('simpan');
route::get('/editlimar/{id}',[LimarController::class, 'edit']);
route::post('/updatelimar/{id}',[LimarController::class, 'update'])->name('update');
Route::delete('/deletelimar/{id}',[LimarController::class, 'destroy']);