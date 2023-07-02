<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Article::orderBy('id')->paginate(10);

        return view(
            'pages.user.posts.index',
            compact('posts'),
            ['title' => 'Data Posting']
        )->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.user.posts.create', ['title' => 'Form New Artikel', 'categories' => Category::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:3|max:250',
            'category_id' => 'required',
            // 'cover' => 'required',
            'content_text' => 'required|min:3',
        ]);

        // Add New Data
        Article::create([
            'title' => $request->get('title'),
            'category_id' => $request->get('category_id'),
            // 'cover' => $request->get('cover'),
            'content_text' => $request->get('content_text'),
            'excerpt' => Str::limit(strip_tags($request->get('content_text')), 50),
            'slug' => Str::slug($request->get('title')),
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('dashboard.articles')->with('success', 'Berhasil tambah data artikel');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('pages.user.posts.show', ['title' => 'Detail Posting', 'post' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
