<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('id')->paginate(10);

        return view(
            'pages.user.kategori.index',
            compact('categories'),
            ['title' => 'Data Kategori']
        )->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.user.kategori.create', ['title' => 'Form New Kategori']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|string|min:3|max:50'
        ]);

        $input['slug'] = Str::slug($request->get('name'));
        $input['user_id'] = auth()->user()->id;

        // Add New Data
        Category::create($input);

        return redirect()->route('dashboard.categories')->with('success', 'Berhasil tambah data kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('pages.user.kategori.edit', compact('category'), ['title' => 'Form Edit Kategori']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:50',
        ]);

        // Update Data
        $category->update([
            'name' => $request->get('name'),
            'slug' => Str::slug($request->get('name'))
        ]);

        return redirect()->route('dashboard.categories')->with('success', 'Berhasil update data kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('dashboard.categories')->with('success', 'Berhasil delete data kategori');
    }
}
