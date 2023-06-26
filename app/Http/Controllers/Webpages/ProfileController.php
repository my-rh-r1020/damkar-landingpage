<?php

namespace App\Http\Controllers\Webpages;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function profileIndex()
    {
        return view('pages.profile', ["title" => "Profil Disdamkarmat TPI"]);
    }

    public function tupoksi()
    {
        return view('components.pages.profile.tupoksi', ['title' => 'Tupoksi Disdamkarmat TPI']);
    }

    public function strukturOrganisasi()
    {
        return view('components.pages.profile.organisasi', ['title' => 'Struktur Organisasi Disdamkarmat TPI']);
    }
}
