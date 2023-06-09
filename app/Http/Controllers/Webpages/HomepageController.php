<?php

namespace App\Http\Controllers\Webpages;

use App\Models\Home;
use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view(
            'pages.homepage',
            [
                "title" => "Disdamkarmat TPI",
                "banners" => Gallery::all()->where('category_id', 5),
                "subContact" => "Hubungi Kami",
                "titleContact" => "Pantang Pulang Sebelum Padam",
                "spanContact" => "Waspada Penyebab Kebakaran di Lingkungan Anda",
                "subServices" => "Pelayanan Kami",
                "serviceItems" => Home::servicesdata(),
                "brosurs" => Gallery::all()->where('category_id', 6),
                "subPrevention" => "Survei Kepuasan Masyarakat",
                "descPrevention" => "Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia eiusmod consequuntur do tempor incididunt ut labore.",
                "subTestimonials" => "Testimoni",
                "descTestimonials" => "Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "posts" => Article::all()->where('category_id', 1)
            ]
        );
    }
}
