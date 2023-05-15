<?php

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_News;
use App\Http\Controllers\C_ELapor;
use App\Http\Controllers\C_Menus;
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
Route::get('profile', [C_Menus::class, 'profilePage']);
Route::get('berita/{slug}', [C_News::class, 'index']);
Route::get('berita', [C_News::class, 'list_berita']);
Route::get('gallery', [C_Menus::class, 'galleryDamkar']);
Route::get('elapor', [C_ELapor::class, "index"]);
Route::get('pelatihan', [C_ELapor::class, 'kegiatan']);
Route::get('insendentil', [C_ELapor::class, 'insendentil']);
Route::get('permohonan', [C_ELapor::class, 'requestData']);
Route::get('redkar', [C_Menus::class, 'redKar']);
