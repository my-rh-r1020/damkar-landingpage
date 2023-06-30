<?php

use App\Http\Controllers\Webpages\HomepageController;
use App\Http\Controllers\Webpages\LinksController;
use App\Http\Controllers\Webpages\ProfileController;
use App\Http\Controllers\Webpages\DanruController;
use App\Http\Controllers\Webpages\ArticleController;
use App\Http\Controllers\Webpages\CategoryController;
use App\Http\Controllers\ELapor\ELaporController;
use App\Http\Controllers\User\BannerDataController;
use App\Http\Controllers\User\BrosurDataController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\PostDataController;
use App\Http\Controllers\User\DanruDataController;
use App\Http\Controllers\User\InsendentilDataController;
use App\Http\Controllers\User\KategoriDataController;
use App\Http\Controllers\User\ReguDataController;
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

Route::get('/', [HomepageController::class, "index"])->name('beranda');

Route::controller(ProfileController::class)->group(function () {
    Route::get('/sejarah', 'profileIndex')->name('sejarah');
    Route::get('/tupoksi', 'tupoksi')->name('tupoksi');
    Route::get('/struktur-organisasi', 'strukturOrganisasi')->name('organisasi');
});

Route::controller(DanruController::class)->group(function () {
    Route::get('/danru', 'index')->name('danru');
});

Route::controller(ArticleController::class)->group(function () {
    Route::get('/berita', 'index')->name('berita');
    Route::get('/berita/{article:slug}', 'show')->name('berita.detail');
    Route::get('/edukasi', 'indexEdukasi')->name('edukasi');
    Route::get('/edukasi/{article:slug}', 'showEdukasi')->name('edukasi.detail');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/category/{category:slug}', 'show')->name('catgegory.index');
});

Route::controller(LinksController::class)->group(function () {
    Route::get('/grafik', 'grafikKebakaran')->name('grafik');
    Route::get('/gallery', 'galleryDamkar')->name('gallery');
    Route::get('/redkar', 'redKar')->name('redkar');
});

// Route::get('/insendentil', [ELaporController::class, 'insendentil'])->name('insendentil');

// Guest Session
Route::middleware('guest')->group(function () {
    // Login
    Route::controller(LoginController::class)->group(function () {
        Route::get('login', 'index')->name('login');
        Route::post('login', 'authenticate');
    });
});

// User Session
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('dashboard')->group(function () {
        // Insendentil
        Route::resource('/insendentil', InsendentilDataController::class)->names([
            'index' => 'dashboard.insendentil'
        ]);

        // Danru
        Route::resource('/danru', DanruDataController::class)->names([
            'index' => 'dashboard.danru'
        ]);
        // Regu
        Route::resource('/regu', ReguDataController::class)->names([
            'index' => 'dashboard.regu'
        ]);
        // Article
        Route::get('/articles/checkSlug', [PostDataController::class, 'checkSlug']);
        Route::resource('/articles', PostDataController::class)->names([
            'index' => 'dashboard.articles'
        ]);
        // Kategori
        Route::resource('/kategori', KategoriDataController::class)->names([
            'index' => 'dashboard.categories'
        ]);
        // Banner
        Route::resource('/banner', BannerDataController::class)->names([
            'index' => 'dashboard.banners'
        ]);
        // Brosur
        Route::resource('/brosur', BrosurDataController::class)->names([
            'index' => 'dashboard.brosurs'
        ]);
    });

    // Logout
    Route::post('/logout', [LoginController::class, 'logout']);
});
