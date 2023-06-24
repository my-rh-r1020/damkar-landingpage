<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Article;
use App\Http\Resources\ArticleResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class ArticleDataController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        $articles = Article::all();

        return $this->sendResponse(ArticleResource::collection($articles), 'Data articles berhasil ditampilkan.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): JsonResponse
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'category_id' => 'required',
            'user_id' => 'required',
            'cover' => 'required',
            'title' => 'required',
            'excerpt' => 'required',
            'content_text' => 'required',
            'slug' => 'required',
            'published_at' => 'required',
        ]);

        // Validation Check
        if ($validator->fails()) return $this->sendError('Validation Error', $validator->errors());

        // Add New Danru Data
        $articles = Article::create($input);

        return $this->sendResponse(new ArticleResource($articles), 'Articles data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): JsonResponse
    {
        $article = Article::find($id);

        // Danru Check Data
        if (is_null($article)) return $this->sendError('Article data not found.');

        return $this->sendResponse(new ArticleResource($article), 'Data article berhasil ditampilkan.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article): JsonResponse
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'category_id' => 'required',
            'user_id' => 'required',
            'cover' => 'required',
            'title' => 'required',
            'excerpt' => 'required',
            'content_text' => 'required',
            'slug' => 'required',
            'published_at' => 'required',
        ]);

        // Validation Check
        if ($validator->fails()) return $this->sendError('Validation Error', $validator->errors());

        // Update Data
        $article->category_id = $input['category_id'];
        $article->user_id = $input['user_id'];
        $article->cover = $input['cover'];
        $article->title = $input['title'];
        $article->excerpt = $input['excerpt'];
        $article->content_text = $input['content_text'];
        $article->slug = $input['slug'];
        $article->published_at = $input['published_at'];
        $article->save();

        return $this->sendResponse(new ArticleResource($article), 'Update data article berhasil.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article): JsonResponse
    {
        $article->delete();

        return $this->sendResponse([], 'Data article berhasil dihapus.');
    }
}
