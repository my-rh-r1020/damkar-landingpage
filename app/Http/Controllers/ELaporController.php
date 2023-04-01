<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ELaporController extends Controller
{
    public function index()
    {
    }

    public function requestData()
    {
        return view("elapor", [
            "title" => "Permohonan Data | Damkar Kota Tanjungpinang"
        ]);
    }
}
