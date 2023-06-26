<?php

namespace App\Http\Controllers\Webpages;

use App\Models\Home;
use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Browsur;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view(
            'pages.homepage',
            [
                "title" => "Disdamkarmat TPI",
                "banners" => Banner::all(),
                "subContact" => "Hubungi Kami",
                "titleContact" => "Pantang Pulang Sebelum Padam",
                "spanContact" => "Waspada Penyebab Kebakaran di Lingkungan Anda",
                "subServices" => "Pelayanan Kami",
                "serviceItems" => Home::servicesdata(),
                "brosurs" => Browsur::all(),
                "subPrevention" => "Survei Kepuasan Masyarakat",
                "descPrevention" => "Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia eiusmod consequuntur do tempor incididunt ut labore.",
                "subTestimonials" => "Testimoni",
                "descTestimonials" => "Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "posts" => Article::all()->where('category_id', '1')
            ]
        );
    }
}
