<?php

use App\Http\Controllers\Webpages\HomepageController;
use App\Http\Controllers\Webpages\LinksController;
use App\Http\Controllers\Webpages\ProfileController;
use App\Http\Controllers\Webpages\DanruController;
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
Route::get('/', [HomepageController::class, "index"])->name('/');

// Profile
Route::get('/sejarah', [ProfileController::class, 'profileIndex'])->name('sejarah');
Route::get('/tupoksi', [ProfileController::class, 'tupoksi'])->name('tupoksi');
Route::get('/struktur-organisasi', [ProfileController::class, 'strukturOrganisasi'])->name('organisasi');
Route::get('/danru', [DanruController::class, 'index'])->name('danru');

// Berita
Route::get('/berita', [ArticleController::class, 'index'])->name('berita');
Route::get('/berita/{article:slug}', [ArticleController::class, 'show'])->name('detail');
Route::get('/category/{category:slug}', [CategoryController::class, 'show'])->name('catgegory');

Route::get('/grafik', [LinksController::class, 'grafikKebakaran'])->name('grafik');
Route::get('/gallery', [LinksController::class, 'galleryDamkar'])->name('gallery');

// Edukasi
Route::get('/edukasi', [ArticleController::class, 'indexEdukasi'])->name('edukasi');
Route::get('/edukasi/{article:slug}', [ArticleController::class, 'showEdukasi']);

Route::get('/elapor', [ELaporController::class, "index"])->name('elapor');
Route::get('/insendentil', [ELaporController::class, 'insendentil'])->name('insendentil');
Route::get('/redkar', [LinksController::class, 'redKar'])->name('redkar');

// Sign In & Sign Out
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
