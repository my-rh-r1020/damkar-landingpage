<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Danru;
use App\Models\Regu;
use Illuminate\Http\Request;

class DanruDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $danrus = Danru::orderBy('id')->paginate(10);

        return view(
            'pages.user.danru.index',
            compact('danrus'),
            ['title' => 'Data Danru',]
        )->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $regus = Regu::all();

        return view('pages.user.danru.create', compact('regus'), ['title' => 'Form New Danru']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $request;
        // $request->validate([
        //     'regu_id' => 'required',
        //     'avatar' => 'required',
        //     'nama_lengkap' => 'required'
        // ]);

        // // Add New Danru
        // Danru::create($request->all());

        // return redirect()->route('dashboard.danru')->with('success', 'Berhasil tambah data danru');
    }

    /**
     * Display the specified resource.
     */
    public function show(Danru $danru)
    {
        return view('pages.user.danru.show', compact('danru'), ['title' => 'Detail Danru']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Danru $danru)
    {
        return view('pages.user.danru.edit', compact('danru'), ['title' => 'Form Edit Danru', 'regus' => Regu::all()]);
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
