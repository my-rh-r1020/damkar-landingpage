<?php

namespace App\Http\Controllers\ELapor;

// Deklarasi Controller
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ELaporController extends Controller
{
    public function index()
    {
        return view("pages.elapor", [
            "title" => "E-LAPOR Disdamkarmat TPI"
        ]);
    }

    public function insendentil()
    {
        return view('pages.insendentil', [
            "title" => "Insendentil Disdamkarmat TPI"
        ]);
    }

    // public function kegiatan()
    // {
    //     return view('pelatihan', [
    //         "title" => "Kegiatan Pelatihan | Damkar Kota Tanjungpinang"
    //     ]);
    // }
}
