<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Danru;
use Illuminate\Http\Request;

class DanruDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.user.danru.index', ['title' => 'Data Danru', 'danrus' => Danru::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Danru $danru)
    {
        return view('pages.user.danru.show', ['title' => 'Detail Danru', 'danru' => $danru]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Danru $danru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Danru $danru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Danru $danru)
    {
        //
    }
}
