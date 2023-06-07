<?php

namespace App\Http\Controllers\Webpages;

// Deklarasi Controller
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_Links extends Controller
{
    public function grafikKebakaran()
    {
        return view('grafik_kebakaran', ["title" => "Grafik Disdamkarmat TPI", "url" => "/grafik"]);
    }

    public function galleryDamkar()
    {
        return view('gallery', ["title" => "Gallery Disdamkarmat TPI", "url" => "/gallery"]);
    }

    public function eduDamkar()
    {
        return view('edukasi', ["title" => "Edukasi Disdamkarmat TPI", "url" => "/edukasi"]);
    }

    public function redKar()
    {
        return view('redkar', ["title" => "Redkar Disdamkarmat TPI", "url" => "/redkar"]);
    }
}
