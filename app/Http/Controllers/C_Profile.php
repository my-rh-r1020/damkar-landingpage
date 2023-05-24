<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class C_Profile extends Controller
{
    public function profileIndex()
    {
        return view('profile', ["title" => "Profil Disdamkarmat TPI"]);
    }

    public function danruDamkar()
    {
        return view('profile_danru', ["title" => "Danru Disdamkarmat TPI", "lists" => Profile::all()]);
    }
}
