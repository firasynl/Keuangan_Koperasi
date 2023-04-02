<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\transaksiController;
use App\Http\Controllers\userController;
use App\Http\Controllers\InvestasiController;


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

Route::resource('/simpanans', \App\Http\Controllers\SimpananController::class);


Route::get('/transaksi', [transaksiController::class, 'index'])->name('transaksi');

/*Transaksi Routes
*/
Route::get('/createtransaksi', [transaksiController::class, 'create'])->name('create');
Route::post('/storeCreate', [transaksiController::class, "store"])->name("storeCreate");
Route::get('/edit/{id}Pendapatan', [transaksiController::class, "edit"])->name("edittransaksi");
Route::post('/update/{id}transaksi', [transaksiController::class, "update"])->name("updatetransaksi");
Route::get('/delete/{id}transaksi', [transaksiController::class, "delete"])->name("deletetransaksi");

Route::resource('user', userController::class);

/* Investasi Routes */
Route::get('/Investasi', [InvestasiController::class, 'index'])->name('/Investasi/DataInvestasi');

Route::get('/Investasi/TambahDataInvestasi', [InvestasiController::class, 'TambahDataInvestasi'])->name('/Investasi/TambahDataInvestasi');
Route::post('/Investasi/InsertDataInvestasi', [InvestasiController::class, 'InsertDataInvestasi'])->name('/Investasi/InsertDataInvestasi');

Route::get('/Investasi/ShowDataInvestasi/{id_investasi}', [InvestasiController::class, 'ShowDataInvestasi'])->name('/Investasi/ShowDataInvestasi');
Route::post('/Investasi/UpdateDataInvestasi/{id_investasi}', [InvestasiController::class, 'UpdateDataInvestasi'])->name('/Investasi/UpdateDataInvestasi');

Route::get('/Investasi/Delete/{id_investasi}', [InvestasiController::class, 'Delete'])->name('Delete');

