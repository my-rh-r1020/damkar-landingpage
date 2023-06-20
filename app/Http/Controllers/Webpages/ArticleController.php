<?php

namespace App\Http\Controllers\Webpages;

// Deklarasi Controller
use App\Http\Controllers\Controller;

// Deklarasi Model
use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'pages.berita',
            [
                "title" => "Berita Disdamkarmat TPI",
                // N+1 Problem Resolved
                "posts" => Article::where('category_id', 1)->latest()->filter(request(['search', 'category']))->paginate(4)->withQueryString(),
            ]
        );
    }
    public function indexEdukasi()
    {
        return view(
            'pages.edukasi',
            [
                "title" => "Edukasi Disdamkarmat TPI",
                "articles" => Article::where('category_id', 2)->latest()->filter(request(['search', 'category']))->paginate(4)->withQueryString(),
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
    public function store(StoreArticleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view(
            'components.pages.berita.detail',
            [
                "title" => "Detail Berita",
                "post" => $article,
            ]
        );
    }
    public function showEdukasi(Article $article)
    {
        return view(
            'components.pages.edukasi.detail',
            [
                "title" => "Detail Edukasi",
                "post" => $article,
            ]
        );
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
    public function update(UpdateArticleRequest $request, Article $article)
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
