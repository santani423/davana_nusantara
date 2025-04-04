<?php

use App\Http\Controllers\CmsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaketTurUmumController;
use App\Http\Controllers\RuangMediaController;
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

Route::get('/home',[HomeController::class,'index'])->name('home');  
Route::resource('paket-tur-umum', PaketTurUmumController::class);
Route::resource('ruang-media', RuangMediaController::class);

Route::get('/cms', [CmsController::class, 'index'])->name('cms');
Route::get('/cms/paket', [CmsController::class, 'index'])->name('cms');