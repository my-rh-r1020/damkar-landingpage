<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Menus extends Controller
{
    public function profilePage()
    {
        return view('profile', [
            "title" => "Profil | Damkar Kota Tanjungpinang"
        ]);
    }
}
