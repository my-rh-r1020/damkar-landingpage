<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Menus extends Controller
{
    public function profilePage()
    {
        return view('profile', [
            "title" => "Profil Damkar Kota Tanjungpinang"
        ]);
    }

    public function grafikKebakaran()
    {
        return view('informasi', ["title" => "Grafik Kebakaran"]);
    }

    public function galleryDamkar()
    {
        return view('gallery', ["title" => "Gallery Kegiatan"]);
    }

    public function redKar()
    {
        return view('redkar', ["title" => "Redkar Damkar"]);
    }
}
