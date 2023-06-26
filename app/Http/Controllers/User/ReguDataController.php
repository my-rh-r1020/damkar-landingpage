<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Regu;
use Illuminate\Http\Request;

class ReguDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.user.regu.index', ['title' => 'Data Regu', 'regus' => Regu::all()]);
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
    public function show(Regu $regu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Regu $regu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Regu $regu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Regu $regu)
    {
        //
    }
}
