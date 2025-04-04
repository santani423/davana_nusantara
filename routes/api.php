<?php

use App\Http\Controllers\Api\PaketController;
use App\Http\Controllers\Api\RuangMediaController;
use App\Http\Controllers\Api\TypePaketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resource('paket', PaketController::class);
Route::resource('ruangMedia', RuangMediaController::class);
Route::get('/type-paket', [TypePaketController::class, 'index'])->name('type-paket');