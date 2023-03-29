<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
        return view(
            'landing',
            [
                "title" => "Damkar Kota Tanjungpinang",
                "subContact" => "Hubungi Kami",
                "titleContact" => "Pantang Pulang Sebelum Padam",
                "spanContact" => "Waspada Penyebab Kebakaran",
                "subServices" => "Pelayanan Kami",
                "subPrevention" => "Survei Kepuasan Masyarakat",
                "descPrevention" => "Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia eiusmod consequuntur do tempor incididunt ut labore.",
                "subTestimonials" => "Testimoni",
                "descTestimonials" => "Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "subBlog" => "Our Blog",
                "posts" => Blog::all()
            ]
        );
    }
}
