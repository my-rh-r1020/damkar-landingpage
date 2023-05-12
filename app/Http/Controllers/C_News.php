<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class C_News extends Controller
{
    public function index($slug)
    {
        return view(
            'berita',
            [
                "title" => "Berita | Damkar Kota Tanjungpinang",
                "post" => News::find($slug)
            ]
        );
    }
}
