<?php

namespace App\Http\Controllers\ELapor;

// Deklarasi Controller
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_ELapor extends Controller
{
    public function index()
    {
        return view("elapor", [
            "title" => "E-LAPOR Disdamkarmat TPI"
        ]);
    }

    public function insendentil()
    {
        return view('insendentil', [
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
