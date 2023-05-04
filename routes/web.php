<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;


use App\Http\Controllers\SimpananController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\anggotaController;
use App\Http\Controllers\userController;
use App\Http\Controllers\InvestasiController;
use App\Http\Controllers\HutangController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\sessionController;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('laporan',LaporanController::class)->middleware('isLogin');

// Route Simpanan
Route::resource('/simpanans', \App\Http\Controllers\SimpananController::class)->middleware('isLogin');


Route::get('/transaksi', [transaksiController::class, 'index'])->name('transaksi')->middleware('isLogin');

/*Transaksi Routes
*/
Route::get('/createtransaksi', [transaksiController::class, 'create'])->name('create')->middleware('isLogin');
Route::post('/storeCreate', [transaksiController::class, "store"])->name("storeCreate")->middleware('isLogin');
Route::get('/edit/{id}Pendapatan', [transaksiController::class, "edit"])->name("edittransaksi")->middleware('isLogin');;
Route::post('/update/{id}transaksi', [transaksiController::class, "update"])->name("updatetransaksi")->middleware('isLogin');
Route::get('/delete/{id}transaksi', [transaksiController::class, "delete"])->name("deletetransaksi")->middleware('isLogin');

Route::resource('user', userController::class)->middleware('isLogin');

/*Anggota Routes */
Route::resource('anggota', anggotaController::class)->middleware('isLogin');

/* Investasi Routes */
Route::get('/Investasi', [InvestasiController::class, 'index'])->name('/Investasi')->middleware('isLogin');

Route::get('/Investasi/TambahDataInvestasi', [InvestasiController::class, 'TambahDataInvestasi'])->name('/Investasi/TambahDataInvestasi')->middleware('isLogin');
Route::post('/Investasi/InsertDataInvestasi', [InvestasiController::class, 'InsertDataInvestasi'])->name('/Investasi/InsertDataInvestasi')->middleware('isLogin');

Route::get('/Investasi/ShowDataInvestasi/{id_investasi}', [InvestasiController::class, 'ShowDataInvestasi'])->name('/Investasi/ShowDataInvestasi')->middleware('isLogin');
Route::post('/Investasi/UpdateDataInvestasi/{id_investasi}', [InvestasiController::class, 'UpdateDataInvestasi'])->name('/Investasi/UpdateDataInvestasi')->middleware('isLogin');

Route::get('/Investasi/Delete/{id_investasi}', [InvestasiController::class, 'Delete'])->name('Delete')->middleware('isLogin');

//Router hutang
Route::resource('/hutangs', HutangController::class)->middleware('isLogin');;

//Router login & logout
Route::get('sesi',[sessionController::class, 'index']);
Route::get('sesi/logout',[sessionController::class, 'logout']);
Route::post('sesi/login',[sessionController::class, 'login']);
