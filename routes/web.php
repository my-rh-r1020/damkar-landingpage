<?php

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_News;
use App\Http\Controllers\C_ELapor;
use App\Http\Controllers\C_Menus;
use App\Http\Controllers\C_Profile;
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
Route::get('profile', [C_Profile::class, 'profileIndex']);
Route::get('danru', [C_Profile::class, 'danruDamkar']);
Route::get('berita/{slug}', [C_News::class, 'index']);
Route::get('berita', [C_News::class, 'list_berita']);
Route::get('informasi', [C_Menus::class, 'grafikKebakaran']);
Route::get('gallery', [C_Menus::class, 'galleryDamkar']);
Route::get('edukasi', [C_Menus::class, 'eduDamkar']);
Route::get('elapor', [C_ELapor::class, "index"]);
Route::get('insendentil', [C_ELapor::class, 'insendentil']);
// Route::get('permohonan', [C_ELapor::class, 'requestData']);
Route::get('redkar', [C_Menus::class, 'redKar']);
