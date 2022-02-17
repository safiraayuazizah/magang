<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenilaianUmumController;
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


Route::get('/selesai_page',[SelesaiPageController::class,'selesai_page']);

Route::get('/create',[PenilaianUmumController::class,'create']);
Route::post('/store',[PenilaianUmumController::class,'store']);
