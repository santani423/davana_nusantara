<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaketTurUmumController;
use App\Http\Controllers\RuangMediaController;
use App\Http\Controllers\SettingController;
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
Route::get('/cms/ruang_media', [CmsController::class, 'ruangMeida'])->name('cms.ruang.media');
Route::get('/cms/ruang_media/show/{code}', [CmsController::class, 'ruangMediaShow'])->name('cms.ruang.media.show');
Route::get('/cms/ruang_media/create', [CmsController::class, 'ruangMediaCreate'])->name('cms.ruang.media.create');
Route::post('/cms/ruang_media/store', [CmsController::class, 'ruangMediaStore'])->name('cms.ruang.media.store');
Route::get('/cms/ruang_media/edit/{code}', [CmsController::class, 'ruangMediaEdit'])->name('cms.ruang.media.edit');




Route::get('/cms/Banner', [BannerController::class, 'index'])->name('cms.banner');
Route::get('/cms/Banner/create', [BannerController::class, 'create'])->name('cms.banner.create');
Route::get('/cms/Banner/edit/{banner}', [BannerController::class, 'edit'])->name('cms.banner.edit');


Route::get('/cms/setting', [SettingController::class, 'index'])->name('cms.setting');