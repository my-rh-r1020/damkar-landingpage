<?php

use App\Http\Controllers\Webpages\HomepageController;
use App\Http\Controllers\Webpages\LinksController;
use App\Http\Controllers\Webpages\C_News;
use App\Http\Controllers\Webpages\ProfileController;
use App\Http\Controllers\ELapor\C_ELapor;
use App\Http\Controllers\Webpages\ArticleController;
use App\Http\Controllers\Webpages\CategoryController;
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

Route::get('/', [HomepageController::class, "index"]);

Route::get('/sejarah', [ProfileController::class, 'profileIndex']);
Route::get('/danru', [ProfileController::class, 'danruDamkar']);

Route::get('berita', [ArticleController::class, 'index']);
Route::get('berita/{article:slug}', [ArticleController::class, 'show']);
Route::get('category/{category:slug}', [CategoryController::class, 'show']);

Route::get('/grafik', [LinksController::class, 'grafikKebakaran']);
Route::get('/gallery', [LinksController::class, 'galleryDamkar']);
Route::get('/edukasi', [LinksController::class, 'eduDamkar']);
Route::get('/elapor', [C_ELapor::class, "index"]);
Route::get('/insendentil', [C_ELapor::class, 'insendentil']);
// Route::get('permohonan', [C_ELapor::class, 'requestData']);
Route::get('/redkar', [LinksController::class, 'redKar']);
