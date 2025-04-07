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
Route::get('/cms/paket/{code}', [CmsController::class, 'paket'])->name('cms.paket');
Route::get('/cms/paket/create/{code}', [CmsController::class, 'paketCreate'])->name('cms.paket.create');
Route::post('/cms/paket/store/{code}', [CmsController::class, 'paketStore'])->name('cms.paket.store');
Route::get('/cms/paket/show/{code}', [CmsController::class, 'paketShow'])->name('cms.paket.show');
Route::get('/cms/paket/edit/{code}', [CmsController::class, 'paketEdit'])->name('cms.paket.edit');
// saat klik finis kirimkan data yang di input user ke url api dengan ajax dan tambahkan juga loading proses simpan data