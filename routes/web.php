<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LimarController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\TrollController;
use App\Http\Controllers\FastelController;
use App\Http\Controllers\RegisterController;

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
//login
Route::get('/', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::group(['middleware' => ['auth']], function () { 
    Route::group(['middleware' => ['cek_login:admin']], function () { 
        Route::get('admin',[AdminController::class,'index'])->name('admin'); 
    }); 
    Route::group(['middleware' => ['cek_login:user']], function () { 
        Route::get('user',[UserController::class,'index'])->name('user'); 
    }); 
 
});
Route::post('/logout', [AuthController::class, 'logout']);
//user
Route::get('/user', [UserController::class, 'index']);
Route::get('/form', [PesanController::class, 'create']);
Route::get('/tabel', [PesanController::class, 'index']);
Route::post('/save', [PesanController::class, 'store'])->name('simpan');
//admin
Route::get('/admin', [AdminController::class, 'index']);
//fasilitas kamar
Route::get('/fasilitaskamar', [LimarController::class, 'index']);
Route::get('/tambahlimar', [LimarController::class, 'create']);
Route::post('/savelimar', [LimarController::class, 'store'])->name('simpan');
route::get('/editlimar/{id}',[LimarController::class, 'edit']);
route::post('/updatelimar/{id}',[LimarController::class, 'update'])->name('updatelimar');
Route::delete('/deletelimar/{id}',[LimarController::class, 'destroy']);

// fasilitas hotel
Route::get('/fasilitashotel', [FastelController::class, 'index']);
Route::get('/tambahfastel', [FastelController::class, 'create']);
Route::post('/savefastel', [FastelController::class, 'store'])->name('simpan');
route::get('/editfastel/{id}',[FastelController::class, 'edit']);
route::post('/update/{id}',[FastelController::class, 'update'])->name('update');
Route::delete('/deletefastel/{id}',[FastelController::class, 'destroy']);