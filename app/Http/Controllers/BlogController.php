<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index($slug)
    {
        return view(
            'berita',
            [
                "title" => "Berita | Damkar Kota Tanjungpinang",
                "post" => Blog::find($slug)
            ]
        );
    }
}
