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
    "subContact" => "Contact Us",
    "titleContact" => "We Help With Any Fire Issues And Emergencies", "spanContact" => "Qadipiscing elit, sed do eiusmod tempor.",
    "descContact" => "Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.",
    "subServices" => "What We Do",
    "titleServices" => "Get An Inside Look At The Lives Of Those Who Serve"
]));
