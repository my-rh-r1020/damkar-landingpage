<?php

use App\Http\Controllers\Webpages\HomepageController;
use App\Http\Controllers\Webpages\LinksController;
use App\Http\Controllers\Webpages\ProfileController;
use App\Http\Controllers\Webpages\DanruController;
use App\Http\Controllers\Webpages\ArticleController;
use App\Http\Controllers\Webpages\CategoryController;
use App\Http\Controllers\ELapor\ELaporController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\PostDataController;
use App\Http\Controllers\User\DanruDataController;
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
Route::get('/', [HomepageController::class, "index"])->name('beranda');

// Profile
Route::get('/sejarah', [ProfileController::class, 'profileIndex'])->name('sejarah');
Route::get('/tupoksi', [ProfileController::class, 'tupoksi'])->name('tupoksi');
Route::get('/struktur-organisasi', [ProfileController::class, 'strukturOrganisasi'])->name('organisasi');
Route::get('/danru', [DanruController::class, 'index'])->name('danru');

// Berita
Route::get('/berita', [ArticleController::class, 'index'])->name('berita');
Route::get('/berita/{article:slug}', [ArticleController::class, 'show'])->name('berita.detail');
Route::get('/category/{category:slug}', [CategoryController::class, 'show'])->name('catgegory.index');

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
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// Dashboard => Articles
Route::resource('/dashboard/articles', PostDataController::class)->names([
    'index' => 'posts.index',
    'create' => 'posts.create'
])->middleware('auth');

// Dashboard => Danru
Route::resource('/dashboard/danru', DanruDataController::class)->names([
    'index' => 'danru.index',
    'create' => 'danru.create'
])->middleware('auth');
