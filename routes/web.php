<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\WisatasController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('events', function () {
    return view('events');
});

Route::get('wisatas',[WisatasController::class,'menampilkan'] );

Route::get('abouts', function () {
    return view('abouts');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('kategori' , KategoriController::class);

Route::resource('lokasi' , LokasiController::class);

Route::resource('event' , EventController::class);

Route::resource('wisata' , WisataController::class);

