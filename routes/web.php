<?php

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
use App\Http\Controllers\PegawaiController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PegawaiController::class, 'index'])->name('home');
Route::get('/tambah', [PegawaiController::class, 'tambah'])->name('tambah');
Route::post('/tambah-data', [PegawaiController::class, 'tambah_data'])->name('tambah_data');
Route::get('/hapus/{id}', [PegawaiController::class, 'delete_data']);
Route::get('/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/update-data', [PegawaiController::class, 'update_data'])->name('edit_data');