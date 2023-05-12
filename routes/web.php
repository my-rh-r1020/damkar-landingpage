<?php

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_News;
use App\Http\Controllers\C_ELapor;
use App\Http\Controllers\ProfileController;
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

// Routing with Arrow Function
// Route::get('/', fn () => view());

Route::get('/', [C_Home::class, "index"]);
Route::get('berita/{slug}', [C_News::class, 'index']);
Route::get('elapor', [C_ELapor::class, "index"]);
Route::get('permohonan', [C_ELapor::class, 'requestData']);
Route::get('insendentil', [C_ELapor::class, 'insendentil']);
Route::get('pelatihan', [C_ELapor::class, 'kegiatan']);
Route::get('profile', [ProfileController::class, 'index']);
