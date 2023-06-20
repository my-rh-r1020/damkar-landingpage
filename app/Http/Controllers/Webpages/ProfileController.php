<?php

namespace App\Http\Controllers\Webpages;

// Deklarasi Controller
use App\Http\Controllers\Controller;

// Deklarasi Model
use App\Models\Profile;
use Illuminate\Http\Request;

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
