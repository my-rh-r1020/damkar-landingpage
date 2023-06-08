<?php

namespace App\Http\Controllers\Webpages;

// Deklarasi Controller
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function grafikKebakaran()
    {
        return view('pages.grafik', ["title" => "Grafik Disdamkarmat TPI", "url" => "/grafik"]);
    }

    public function galleryDamkar()
    {
        return view('pages.gallery', ["title" => "Gallery Disdamkarmat TPI", "url" => "/gallery"]);
    }

    public function eduDamkar()
    {
        return view('pages.edukasi', ["title" => "Edukasi Disdamkarmat TPI", "url" => "/edukasi"]);
    }

    public function redKar()
    {
        return view('pages.redkar', ["title" => "Redkar Disdamkarmat TPI", "url" => "/redkar"]);
    }
}
