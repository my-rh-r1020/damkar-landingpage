<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ELaporController extends Controller
{
    public function index()
    {
        return view("elapor", [
            "title" => "E-LAPOR | Damkar Kota Tanjungpinang"
        ]);
    }

    public function requestData()
    {
        return view('requestData', [
            "title" => "Permohonan Data | Damkar Kota Tanjungpinang"
        ]);
    }
}
