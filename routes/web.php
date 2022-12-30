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

Route::get('/', function () {
    return view('welcome');
});
// Route::resource('obat','obatController')->except(['show','update']);
Route::get('/obat', [App\Http\Controllers\obatController::class, 'index']);
Route::post('/addupdateobat', [App\Http\Controllers\obatController::class, 'store']);
Route::get('/obat/{id}/edit', [App\Http\Controllers\obatController::class, 'edit']);
Route::delete('/delete/{id}', [App\Http\Controllers\obatController::class, 'destroy']);

Route::get('/tindakan', [App\Http\Controllers\tindakanController::class, 'index']);
Route::post('/addupdatetindakan', [App\Http\Controllers\tindakanController::class, 'store']);
Route::get('/tindakan/{id}/edit', [App\Http\Controllers\tindakanController::class, 'edit']);
Route::delete('/deletetindakan/{id}', [App\Http\Controllers\tindakanController::class, 'destroy']);

Route::get('/pasien', [App\Http\Controllers\pasienController::class, 'index']);
Route::post('/addupdatepasien', [App\Http\Controllers\pasienController::class, 'store']);
Route::get('/pasien/{id}/edit', [App\Http\Controllers\pasienController::class, 'edit']);
Route::delete('/deletepasien/{id}', [App\Http\Controllers\pasienController::class, 'destroy']);

Route::get('/admin', [App\Http\Controllers\userController::class, 'index']);
Route::post('/addupdateadmin', [App\Http\Controllers\userController::class, 'store']);
Route::get('/admin/{id}/edit', [App\Http\Controllers\userController::class, 'edit']);
Route::delete('/deleteadmin/{id}', [App\Http\Controllers\userController::class, 'destroy']);

Route::get('/dokter', [App\Http\Controllers\dokterController::class, 'index']);
Route::post('/addupdatedokter', [App\Http\Controllers\dokterController::class, 'store']);
Route::get('/dokter/{id}/edit', [App\Http\Controllers\dokterController::class, 'edit']);
Route::delete('/deletedokter/{id}', [App\Http\Controllers\dokterController::class, 'destroy']);

Route::get('/kasir', [App\Http\Controllers\kasirController::class, 'index']);
Route::post('/addupdatekasir', [App\Http\Controllers\kasirController::class, 'store']);
Route::get('/kasir/{id}/edit', [App\Http\Controllers\kasirController::class, 'edit']);
Route::delete('/deletekasir/{id}', [App\Http\Controllers\kasirController::class, 'destroy']);
Route::post('/konfirmkasir/{id}', [App\Http\Controllers\kasirController::class, 'konfirm']);

Route::get('/histori', [App\Http\Controllers\historiController::class, 'index']);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

