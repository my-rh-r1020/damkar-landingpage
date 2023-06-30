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
        $regus = Regu::orderBy('id')->paginate(10);

        return view(
            'pages.user.regu.index',
            compact('regus'),
            ['title' => 'Data Regu']
        )->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.user.regu.create', ['title' => 'Form New Regu']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_regu' => 'required',
            'lokasi' => 'required'
        ]);

        // Add New Data
        Regu::create($request->all());

        return redirect()->route('dashboard.regu')->with('success', 'Berhasil tambah data regu');
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
        return view('pages.user.regu.edit', compact('regu'), ['title' => 'Form Edit Regu']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Regu $regu)
    {
        $request->validate([
            'nama_regu' => 'required',
            'lokasi' => 'required'
        ]);

        // Update Data
        $regu->update($request->all());

        return redirect()->route('dashboard.regu')->with('success', 'Berhasil update data regu');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Regu $regu)
    {
        $regu->delete();

        return redirect()->route('dashboard.regu')->with('success', 'Berhasil delete data regu');
    }
}
