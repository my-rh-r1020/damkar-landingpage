<?php

use App\Http\Controllers\Webpages\C_Homepage;
use App\Http\Controllers\Webpages\C_Links;
use App\Http\Controllers\Webpages\C_News;
use App\Http\Controllers\Webpages\C_Profile;
use App\Http\Controllers\ELapor\C_ELapor;
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

Route::get('/', [C_Homepage::class, "index"]);
Route::get('sejarah', [C_Profile::class, 'profileIndex']);
Route::get('danru', [C_Profile::class, 'danruDamkar']);
Route::get('berita/{slug}', [C_News::class, 'index']);
Route::get('berita', [C_News::class, 'list_berita']);
Route::get('informasi', [C_Links::class, 'grafikKebakaran']);
Route::get('gallery', [C_Links::class, 'galleryDamkar']);
Route::get('edukasi', [C_Links::class, 'eduDamkar']);
Route::get('elapor', [C_ELapor::class, "index"]);
Route::get('insendentil', [C_ELapor::class, 'insendentil']);
// Route::get('permohonan', [C_ELapor::class, 'requestData']);
Route::get('redkar', [C_Links::class, 'redKar']);
