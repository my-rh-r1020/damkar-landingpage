<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Menus extends Controller
{
    public function profilePage()
    {
        return view('profile', ["title" => "Profil Disdamkarmat TPI"]);
    }

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
