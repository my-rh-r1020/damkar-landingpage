<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Danru;
use App\Models\Regu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $input = $request->validate([
            'nama_lengkap' => 'required|string|min:3|max:100',
            'regu_id' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg|max:1024'
        ]);

        // Avatar Validation
        if ($avatar = $request->file('avatar')) {
            $avatarName = date('YmdHis') . "." . $avatar->getClientOriginalExtension();
            $avatar->storeAs('profil-img', $avatarName);
            $input['avatar'] = $avatarName;
        }

        $input['user_id'] = auth()->user()->id;

        // Avatar Validation v2
        // if ($avatar = $request->file('avatar')) {
        //     $destinationPath = 'assets/images/profile/';
        //     $profileAvatar = date('YmdHis') . "." . $avatar->getClientOriginalExtension();
        //     $avatar->move($destinationPath, $profileAvatar);
        //     $input['avatar'] = "$profileAvatar";
        // }

        // Add New Danru
        Danru::create($input);

        return redirect()->route('dashboard.danru')->with('success', 'Berhasil tambah data danru');
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
        $input = $request->validate([
            'nama_lengkap' => 'required|string|min:3|max:100',
            'regu_id' => 'required',
            'avatar' => 'image|mimes:jpeg,png,jpg|max:1024'
        ]);

        // Avatar Validation
        if ($avatar = $request->file('avatar')) {
            $avatarName = date('YmdHis') . "." . $avatar->getClientOriginalExtension();
            $avatar->storeAs('profil-img', $avatarName);
            $input['avatar'] = $avatarName;
        } else {
            unset($input['avatar']);
        }

        $input['user_id'] = auth()->user()->id;

        // Avatar Validation v2
        // if ($avatar = $request->file('avatar')) {
        //     $destinationPath = 'assets/images/profile/';
        //     $profileAvatar = date('YmdHis') . "." . $avatar->getClientOriginalExtension();
        //     $avatar->move($destinationPath, $profileAvatar);
        //     $input['avatar'] = "$profileAvatar";
        // } else {
        //     unset($input['avatar']);
        // }

        // Update Danru
        $danru->update($input);

        return redirect()->route('dashboard.danru')->with('success', 'Berhasil update data danru');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Danru $danru)
    {
        $danru->delete();

        // Avatar Deleted
        if ($danru->avatar) {
            Storage::delete($danru->avatar);
        }

        return redirect()->route('dashboard.danru')->with('success', 'Berhasil hapus data danru');
    }
}
