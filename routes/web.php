<?php

use App\Http\Controllers\Webpages\HomepageController;
use App\Http\Controllers\Webpages\LinksController;
use App\Http\Controllers\Webpages\ProfileController;
use App\Http\Controllers\Webpages\ArticleController;
use App\Http\Controllers\Webpages\CategoryController;
use App\Http\Controllers\ELapor\ELaporController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\LoginController;
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

// Homepage
Route::get('/', [HomepageController::class, "index"]);

// Profile
Route::get('/sejarah', [ProfileController::class, 'profileIndex']);
Route::get('/danru', [ProfileController::class, 'danruDamkar']);

// Berita
Route::get('berita', [ArticleController::class, 'index']);
Route::get('berita/{article:slug}', [ArticleController::class, 'show']);
Route::get('category/{category:slug}', [CategoryController::class, 'show']);

Route::get('/grafik', [LinksController::class, 'grafikKebakaran']);
Route::get('/gallery', [LinksController::class, 'galleryDamkar']);
Route::get('/edukasi', [LinksController::class, 'eduDamkar']);
Route::get('/elapor', [ELaporController::class, "index"]);
Route::get('/insendentil', [ELaporController::class, 'insendentil']);
// Route::get('permohonan', [C_ELapor::class, 'requestData']);
Route::get('/redkar', [LinksController::class, 'redKar']);

// Sign In & Sign Out
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
