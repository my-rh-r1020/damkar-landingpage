<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_ELapor extends Controller
{
    public function index()
    {
        return view("elapor", [
            "title" => "E-LAPOR | Damkar Kota Tanjungpinang"
        ]);
    }

    public function requestData()
    {
        return view('permohonan', [
            "title" => "Permohonan Data | Damkar Kota Tanjungpinang"
        ]);
    }

    public function insendentil()
    {
        return view('insendentil', [
            "title" => "Insendentil Form | Damkar Kota Tanjungpinang"
        ]);
    }

    public function kegiatan()
    {
        return view('pelatihan', [
            "title" => "Kegiatan Pelatihan | Damkar Kota Tanjungpinang"
        ]);
    }
}
