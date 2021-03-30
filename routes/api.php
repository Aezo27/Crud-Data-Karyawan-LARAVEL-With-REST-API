<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Http\Controllers\ApiController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/data', [ApiController::class, 'index'])->name('home');
Route::post('/tambah-data', [ApiController::class, 'tambah_data'])->name('tambah_data');
Route::delete('/hapus-data/{id}', [ApiController::class, 'delete_data']);
Route::put('/update-data', [ApiController::class, 'update_data'])->name('edit_data');
Route::get('/nama/{id}', [ApiController::class, 'nama'])->name('nama');
Route::get('/whatsapp', [ApiController::class, 'whatsapp'])->name('whatsapp');
Route::put('/update-whatsapp', [ApiController::class, 'update_whatsapp'])->name('update_whatsapp');