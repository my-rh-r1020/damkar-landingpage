<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Browsur;
use App\Http\Requests\StoreBrowsurRequest;
use App\Http\Requests\UpdateBrowsurRequest;

class BrosurDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.user.brosur.index', ['title' => 'Data Brosur', 'brosurs' => Browsur::all()]);
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
    public function store(StoreBrowsurRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Browsur $browsur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Browsur $browsur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrowsurRequest $request, Browsur $browsur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Browsur $browsur)
    {
        //
    }
}
