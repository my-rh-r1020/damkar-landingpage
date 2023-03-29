<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
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
