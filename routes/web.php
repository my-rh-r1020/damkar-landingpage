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
Route::get('/', fn () => view(
    'landing',
    $news_post = [
        [
            "title" => "Tingkatkan Kewaspadaan, Rahma Buka Lahan Jangan di Bakar",
            "slug" => "tingkatkan-kewaspadaan-rahma-buka-lahan-jangan-dibakar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, eveniet. Quidem, voluptates nesciunt? Minima inventore itaque architecto! Natus, unde accusamus nulla minus delectus vitae ratione molestiae, ad fugit ex laudantium qui autem architecto quaerat voluptas voluptatem vel optio dolorum eos suscipit sapiente corporis quas possimus pariatur! Error qui asperiores aut esse velit doloremque harum, ipsam facere animi blanditiis ducimus veniam cum molestiae sapiente ratione aspernatur iusto tempore nesciunt iure? Necessitatibus."
        ]
    ],
    [
        "title" => "DAMKAR",
        "subContact" => "Hubungi Kami",
        "titleContact" => "Pantang Pulang Sebelum Padam",
        "spanContact" => "Waspada Penyebab Kebakaran",
        "subServices" => "Pelayanan Kami",
        "subPrevention" => "Survei Kepuasan Masyarakat",
        "descPrevention" => "Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia eiusmod consequuntur do tempor incididunt ut labore.",
        "subTestimonials" => "Testimoni",
        "descTestimonials" => "Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        "subBlog" => "Our Blog",
        "posts" => $news_post
    ]
));

Route::get('/berita', fn () => view('berita', [
    "title" => "DAMKAR | Berita"
]));
