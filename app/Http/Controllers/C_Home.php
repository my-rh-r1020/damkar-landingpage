<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\News;

class C_Home extends Controller
{
    public function index()
    {
        return view(
            'landing',
            [
                "title" => "Disdamkarmat TPI",
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
                "posts" => News::all()
            ]
        );
    }
}
