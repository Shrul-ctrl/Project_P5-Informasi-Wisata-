<?php

use App\Http\Controllers\BaliController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\JawaController;
use App\Http\Controllers\KalimantanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\MalukuController;
use App\Http\Controllers\SulawesiController;
use App\Http\Controllers\SumateraController;
use App\Http\Controllers\WelcomeController;
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

// Route::get('',[w::class,'menampilkan'] );

Route::get('',[WelcomeController::class,'menampilkan'] );
// Route::get('/{id}',[WelcomeController::class,'show']);

Route::get('wisatas',[WisatasController::class,'menampilkan'] );

Route::get('jawa',[JawaController::class,'menampilkan'] );
Route::get('show/{id}',[JawaController::class,'show'] );

Route::get('bali',[BaliController::class,'menampilkan'] );
Route::get('show/{id}',[BaliController::class,'show'] );

Route::get('maluku',[MalukuController::class,'menampilkan'] );
Route::get('show/{id}',[MalukuController::class,'show'] ); 

Route::get('sulawesi',[SulawesiController::class,'menampilkan'] );
Route::get('show/{id}',[SulawesiController::class,'show'] );

Route::get('sumatera',[SumateraController::class,'menampilkan'] );
Route::get('show/{id}',[SumateraController::class,'show'] );

Route::get('kalimantan',[KalimantanController::class,'menampilkan'] );
Route::get('show/{id}',[KalimantanController::class,'show'] );


Route::get('abouts', function () {
    return view('abouts');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('kategori' , KategoriController::class);

Route::resource('event' , EventController::class);

Route::resource('lokasi' , LokasiController::class);

Route::resource('wisata' , WisataController::class);

