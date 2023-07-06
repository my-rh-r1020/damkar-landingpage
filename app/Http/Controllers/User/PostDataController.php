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
            ['title' => 'Data Artikel']
        )->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.user.posts.create', ['title' => 'Form New Artikel', 'categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'title' => 'required|string|min:3|max:250',
            'category_id' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'content_text' => 'required|min:3',
        ]);

        // Article Cover Validation
        if ($cover = $request->file('cover')) {
            $coverName = date('YmdHis') . "." . $cover->getClientOriginalExtension();
            $cover->storeAs('articles-img', $coverName);
            $input['cover'] = $coverName;
        }

        $input['excerpt'] = Str::limit(strip_tags($request->content_text), 100);
        $input['slug'] = Str::slug($request->title);
        $input['user_id'] = auth()->user()->id;

        // Article Cover Validation v2
        // if ($cover = $request->file('cover')) {
        //     $destinationPath = 'assets/images/articles/';
        //     $coverArticle = date('YmdHis') . "." . $cover->getClientOriginalExtension();
        //     $cover->move($destinationPath, $coverArticle);
        //     $input['cover'] = "$coverArticle";
        // }

        // Add New Data
        Article::create($input);

        return redirect()->route('dashboard.articles')->with('success', 'Berhasil tambah data artikel');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('pages.user.posts.show', ['title' => 'Detail Artikel', 'post' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('pages.user.posts.edit', compact('article'), ['title' => 'Form Edit Artikel', 'categories' => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $input = $request->validate([
            'title' => 'required|string|min:3|max:250',
            'category_id' => 'required',
            'cover' => 'image|mimes:jpeg,png,jpg|max:2048',
            'content_text' => 'required|min:3',
        ]);

        // Article Cover Validation
        if ($cover = $request->file('cover')) {
            $coverName = date('YmdHis') . "." . $cover->getClientOriginalExtension();
            $cover->storeAs('articles-img', $coverName);
            $input['cover'] = $coverName;
        } else {
            unset($input['cover']);
        }

        $input['excerpt'] = Str::limit(strip_tags($request->content_text), 100);
        $input['slug'] = Str::slug($request->title);
        $input['user_id'] = auth()->user()->id;

        // Article Cover Validation v2
        // if ($cover = $request->file('cover')) {
        //     $destinationPath = 'assets/images/articles/';
        //     $coverArticle = date('YmdHis') . "." . $cover->getClientOriginalExtension();
        //     $cover->move($destinationPath, $coverArticle);
        //     $input['cover'] = "$coverArticle";
        // } else {
        //     unset($input['cover']);
        // }

        // Update Article
        $article->update($input);

        return redirect()->route('dashboard.articles')->with('success', 'Berhasil updated data artikel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('dashboard.articles')->with('success', 'Berhasil hapus data artikel');
    }
}
