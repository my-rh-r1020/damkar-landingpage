<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Routing with Arrow Function
Route::get('/', fn () => view('landing', [
    "subContact" => "Hubungi Kami",
    "titleContact" => "Pantang Pulang Sebelum Padam",
    "spanContact" => "Waspada Penyebab Kebakaran",
    "subServices" => "What We Do",
    "subPrevention" => "Prevention Services",
    "titlePrevention" => "Promoting Safety At Your Home & Office",
    "descPrevention" => "Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia eiusmod consequuntur do tempor incididunt ut labore.",
    "subTestimonials" => "Testimonials",
    "titleTestimonials" => "What They Say",
    "descTestimonials" => "Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    "subBlog" => "Our Blog",
    "titleBlog" => "Latest News"
]));
