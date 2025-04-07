<?php

use App\Http\Controllers\Api\PaketController;
use App\Http\Controllers\Api\RuangMediaController;
use App\Http\Controllers\Api\TypePaketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Mockery\Generator\StringManipulation\Pass\Pass;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/paket', [PaketController::class, 'index'])->name('paket.index');
Route::post('/paket', [PaketController::class, 'store'])->name('paket.store');
Route::get('/paket/{paket}', [PaketController::class, 'show'])->name('paket.show');
Route::post('/paket/update/{paket}', [PaketController::class, 'update'])->name('paket.update');
Route::delete('/paket/{paket}', [PaketController::class, 'destroy'])->name('paket.destroy');
Route::get('/type-paket', [TypePaketController::class, 'index'])->name('type-paket'); 

Route::get('/ruang-media', [RuangMediaController::class, 'index'])->name('ruangMedia.index');
Route::post('/ruang-media', [RuangMediaController::class, 'store'])->name('ruang-media.store');
Route::get('/ruang-media/{ruangMedia}', [RuangMediaController::class, 'show'])->name('ruang-media.show');
Route::post('/ruang-media/update/{ruangMedia}', [RuangMediaController::class, 'update'])->name('ruang-media.update');
Route::delete('/ruang-media/{ruangMedia}', [RuangMediaController::class, 'destroy'])->name('ruang-media.destroy'); 
