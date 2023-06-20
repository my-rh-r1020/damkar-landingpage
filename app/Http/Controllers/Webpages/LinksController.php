<?php

namespace App\Http\Controllers\Webpages;

// Deklarasi Controller
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function grafikKebakaran()
    {
        return view('pages.grafik', ["title" => "Grafik Disdamkarmat TPI"]);
    }

    public function galleryDamkar()
    {
        return view('pages.gallery', ["title" => "Gallery Disdamkarmat TPI"]);
    }

    public function redKar()
    {
        return view('pages.redkar', ["title" => "Redkar Disdamkarmat TPI"]);
    }
}
