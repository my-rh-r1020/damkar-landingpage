<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.user.kontak.index', ['title' => 'Data Kontak', 'contacts' => Contact::get()]);
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
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('pages.user.kontak.edit', compact('contact'), ['title' => 'Edit Data Kontak']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $input = $request->validate([
            'alamat' => 'required|string|min:3|max:200',
            'email' => 'required|email:dns',
            'tlp' => 'required|min:3|max:15',
            'nohp' => 'required|min:3|max:12',
            'fb_link' => 'required|min:5',
            'ig_link' => 'required|min:5',
            'youtube_link' => 'required|min:5',
            'link_tautan1' => 'required|min:5',
        ]);

        $input['medsos_link1'] = $request->get('medsos_link1');
        $input['medsos_link2'] = $request->get('medsos_link2');
        $input['link_tautan2'] = $request->get('link_tautan2');
        $input['link_tautan3'] = $request->get('link_tautan3');

        $contact->update($input);

        return redirect()->route('dashboard.contact')->with('success', 'Berhasil update data kontak');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
