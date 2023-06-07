<?php

namespace App\Http\Controllers\Webpages;

// Deklarasi Controller
use App\Http\Controllers\Controller;

// Deklarasi Model
use App\Models\Profile;
use Illuminate\Http\Request;

class C_Profile extends Controller
{
    public function profileIndex()
    {
        return view('profile', ["title" => "Profil Disdamkarmat TPI", "url" => "/profile"]);
    }

    public function danruDamkar()
    {
        return view('profile_danru', ["title" => "Danru Disdamkarmat TPI", "url" => "/danru", "lists" => Profile::all()]);
    }
}
