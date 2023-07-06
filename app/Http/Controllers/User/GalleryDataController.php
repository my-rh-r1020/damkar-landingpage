<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::orderBy('id')->paginate(10);

        return view(
            'pages.user.gallery.index',
            compact('galleries'),
            ['title' => 'Data Gallery']
        )->with('i', (request()->input('page', 1) - 1) * 10);;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('pages.user.gallery.create', compact('categories'), ['title' => 'Form New Gallery']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'title' => 'required|string|min:3|max:250',
            'category_id' => 'required',
            'deskripsi' => 'required|min:3',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'albums.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Thumbnail Validation
        if ($thumbnail = $request->file('thumbnail')) {
            $galleryName = date('YmdHis') . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->storeAs('galleries-img', $galleryName);
            $input['thumbnail'] = $galleryName;
        }

        // Dokumentasi Validation
        $albums = [];
        if ($request->albums) {
            foreach ($request->albums as $key => $album) {
                $albumName = time() . rand(1, 99) . '.' . $album->extension();
                $album->storeAs('galleries-img', $albumName);
                $albums[]['dokumentasi'] = $albumName;
                $input[]['dokumentasi'] = $albumName;
            }
        }

        $input['slug'] = Str::slug($request->title);
        $input['user_id'] = auth()->user()->id;

        // Add New Data
        foreach ($albums as $key => $album) {
            Gallery::create($input, $album);
        }

        return redirect()->route('dashboard.gallery')->with('success', 'Berhasil tambah data gallery');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        return view('pages.user.gallery.show', ['title' => 'Detail Gallery', 'gallery' => $gallery]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('pages.user.gallery.edit', compact('gallery'), ['title' => 'Form Edit Gallery', 'categories' => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $input = $request->validate([
            'title' => 'required|string|min:3|max:250',
            'category_id' => 'required',
            'deskripsi' => 'required|min:3',
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:2048',
            'documentations.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Thumbnail Validation
        if ($thumbnail = $request->file('thumbnail')) {
            $galleryName = date('YmdHis') . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->storeAs('galleries-img', $galleryName);
            $input['thumbnail'] = $galleryName;
        } else {
            unset($input['thumbnail']);
        }

        // Dokumentasi Validation
        $documentations = [];
        if ($request->file('documentations')) {
            foreach ($request->file('documentations') as $key => $dokumentasi) {
                $dokumentasiName = date('YmdHis') . "." . $dokumentasi->getClientOriginalExtension();
                $dokumentasi->storeAs('galleries-img', $dokumentasiName);
                $documentations[]['dokumentasi'] = $dokumentasiName;
            }
        } else {
            unset($input['documentations']);
        }

        foreach ($documentations as $key => $dokumentasi) {
            $input['dokumentasi'] = $dokumentasi;
        }

        $input['slug'] = Str::slug($request->title);
        $input['user_id'] = auth()->user()->id;

        // Add New Data
        $gallery->update($input);

        return redirect()->route('dashboard.gallery')->with('success', 'Berhasil edit data gallery');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        // Gallery Deleted
        if ($gallery->thumbnail) {
            Storage::delete($gallery->thumbnail);
        }

        $gallery->delete();

        return redirect()->route('dashboard.gallery')->with('success', 'Berhasil hapus data gallery');
    }
}
