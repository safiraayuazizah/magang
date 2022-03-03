<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenilaianUmumController;
use App\Http\Controllers\PenilaianPersonilController;
use App\Http\Controllers\PenilaianDantimController;

use App\Http\Controllers\SelesaiPageController;

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
    return view ('penilaian');
});

Route::get('/penilaian', function () {
    return view ('penilaian');
});


Route::get('/poinpenilaian', function () {
    return view ('poinpenilaian');
});
Route::get('/poinpenilaiandantim', function () {
    return view ('poinpenilaiandantim');
});
// route penilaian umum
Route::get('/create',[PenilaianUmumController::class,'create']);
Route::match(['get', 'post'],'/store',[PenilaianUmumController::class,'store'])->name('create.penilaian');
//route penilaian untuk personil
Route::get('/create',[PenilaianPersonilController::class,'create']);
Route::match(['get', 'post'],'/buat',[PenilaianPersonilController::class,'store'])->name('create.penilaianpersonil');
// route penilaian dantim
Route::get('/create',[PenilaianDantimController::class,'create']);
Route::match(['get', 'post'],'/make',[PenilaianDantimController::class,'store'])->name('create.penilaiandantim');

Route::post('/penilaian',[PenilaianDantimController::class,'store']);


