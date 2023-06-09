<?php

namespace App\Http\Controllers\Webpages;

// Deklarasi Controller
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Deklarasi Model
use App\Models\Home;
use App\Models\Article;

class HomepageController extends Controller
{
    public function index()
    {
        return view(
            'pages.homepage',
            [
                "title" => "Disdamkarmat TPI",
                "url" => "/",
                "herobanners" => Home::herobannerdata(),
                "subContact" => "Hubungi Kami",
                "titleContact" => "Pantang Pulang Sebelum Padam",
                "spanContact" => "Waspada Penyebab Kebakaran di Lingkungan Anda",
                "subServices" => "Pelayanan Kami",
                "serviceItems" => Home::servicesdata(),
                "gallerys" => Home::gallerydata(),
                "subPrevention" => "Survei Kepuasan Masyarakat",
                "descPrevention" => "Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia eiusmod consequuntur do tempor incididunt ut labore.",
                "subTestimonials" => "Testimoni",
                "descTestimonials" => "Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "posts" => Article::all()
            ]
        );
    }
}
