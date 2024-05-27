<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PegawaiController::class,'index'])->name('home');

Route::get('/pegawai/tambah',[PegawaiController::class,'tambah'])->name('tambah');

Route::post('/pegawai/store',[PegawaiController::class,'store'])->name('store');

Route::get('/pegawai/edit/{id}',[PegawaiController::class,'edit'])->name('edit');

Route::post('/pegawai/update',[PegawaiController::class,'update'])->name('update');

Route::get('/pegawai/hapus/{id}',[PegawaiController::class,'hapus'])->name('hapus');
