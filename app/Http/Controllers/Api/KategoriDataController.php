<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Category;
use App\Http\Resources\KategoriResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class KategoriDataController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        $kategori = Category::all();

        return $this->sendResponse(KategoriResource::collection($kategori), 'Data kategori berhasil ditampilkan.');
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
            'name' => 'required',
            'slug' => 'required'
        ]);

        // Validation Check
        if ($validator->fails()) return $this->sendError('Validation Error', $validator->errors());

        // Add New Danru Data
        $kategori = Category::create($input);

        return $this->sendResponse(new KategoriResource($kategori), 'Category data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): JsonResponse
    {
        $kategori = Category::find($id);

        // Danru Check Data
        if (is_null($kategori)) return $this->sendError('Category data not found.');

        return $this->sendResponse(new KategoriResource($kategori), 'Data kategori berhasil ditampilkan.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category): JsonResponse
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'slug' => 'required'
        ]);

        // Validation Check
        if ($validator->fails()) return $this->sendError('Validation Error', $validator->errors());

        // Update Data
        $category->name = $input['name'];
        $category->slug = $input['slug'];
        $category->save();

        return $this->sendResponse(new KategoriResource($category), 'Update data kategori berhasil.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category): JsonResponse
    {
        $category->delete();

        return $this->sendResponse([], 'Data kategori berhasil dihapus.');
    }
}
