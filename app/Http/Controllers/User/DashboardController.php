<?php

namespace App\Http\Controllers\User;

// Deklarasi Controller
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.user.dashboard', ["title" => "Dashboard Disdamkarmat"]);
    }
}
