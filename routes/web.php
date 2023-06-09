<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/index', [BukuController::class, 'index'])->name('index');

//tambah buku
Route::get('/tambahbuku', [BukuController::class, 'tambahbuku'])->name('tambahbuku');
Route::post('/insertbuku', [BukuController::class, 'insertbuku'])->name('insertbuku');

//tampilan buku
Route::get('/tampilkanbuku/{id}', [BukuController::class, 'tampilkanbuku'])->name('tampilkanbuku');
Route::post('/updatebuku/{id}', [BukuController::class, 'updatebuku'])->name('updatebuku');

//hapus buku
Route::get('/delete/{id}', [BukuController::class, 'delete'])->name('delete');
