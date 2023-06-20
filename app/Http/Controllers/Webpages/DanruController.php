<?php

namespace App\Http\Controllers\Webpages;

// Deklarasi Controller
use App\Http\Controllers\Controller;

use App\Http\Requests\StoreDanruRequest;
use App\Http\Requests\UpdateDanruRequest;
use App\Models\Danru;
use App\Models\Regu;

class DanruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'components.pages.profile.danru',
            [
                "title" => "Danru Disdamkarmat TPI",
                "lists" => Regu::with('danrus')->get()
            ]
        );
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
    public function store(StoreDanruRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Danru $danru)
    {
        //
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
    public function update(UpdateDanruRequest $request, Danru $danru)
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
