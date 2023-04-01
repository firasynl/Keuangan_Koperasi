<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\transaksiController;
use App\Http\Controllers\userController;


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

