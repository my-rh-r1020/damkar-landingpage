<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class C_News extends Controller
{
    public function index($slug)
    {
        return view(
            'detailBerita',
            [
                "title" => $slug,
                "post" => News::find($slug)
            ]
        );
    }

    public function list_berita()
    {
        return view(
            'berita',
            [
                "title" => "Berita Damkar Kota Tanjungpinang",
                "posts" => News::all()
            ]
        );
    }
}
