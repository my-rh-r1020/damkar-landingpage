<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ELaporController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\Blog;
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

Route::get('/', [HomeController::class, "index"]);
Route::get('berita/{slug}', [BlogController::class, 'index']);
Route::get('elapor', [ELaporController::class, "index"]);
Route::get('permohonan', [ELaporController::class, 'requestData']);
Route::get('insendentil', [ELaporController::class, 'insendentil']);
Route::get('pelatihan', [ELaporController::class, 'kegiatan']);
Route::get('profile', [ProfileController::class, 'index']);
