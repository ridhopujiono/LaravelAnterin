<?php

use App\Http\Controllers\HalamanUtamaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HalamanUtamaController::class, 'index']);
Route::get('/kurir', [HalamanUtamaController::class, 'kurir']);
Route::get('/about', [HalamanUtamaController::class, 'about']);
Route::get('/team', [HalamanUtamaController::class, 'team']);
Route::get('/contact', [HalamanUtamaController::class, 'contact']);
Route::get('/pegawai', [HalamanUtamaController::class, 'pegawai']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('kurirs', App\Http\Controllers\KurirController::class);


Route::resource('empolyees', App\Http\Controllers\EmpolyeeController::class);
