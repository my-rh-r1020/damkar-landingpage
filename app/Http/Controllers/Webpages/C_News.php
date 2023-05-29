<?php

namespace App\Http\Controllers\Webpages;

// Deklarasi Controller
use App\Http\Controllers\Controller;
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
                "title" => "Berita Disdamkarmat TPI",
                "posts" => News::all()
            ]
        );
    }
}