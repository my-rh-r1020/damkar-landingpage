<?php

namespace App\Http\Controllers\Webpages;

// Deklarasi Controller
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_Links extends Controller
{
    public function grafikKebakaran()
    {
        return view('informasi', ["title" => "Grafik Disdamkarmat TPI"]);
    }

    public function galleryDamkar()
    {
        return view('gallery', ["title" => "Gallery Disdamkarmat TPI"]);
    }

    public function eduDamkar()
    {
        return view('edukasi', ["title" => "Edukasi Disdamkarmat TPI"]);
    }

    public function redKar()
    {
        return view('redkar', ["title" => "Redkar Disdamkarmat TPI"]);
    }
}
