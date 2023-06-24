<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Danru;
use App\Http\Resources\DanruResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class DanruDataController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        $danrus = Danru::all();

        return $this->sendResponse(DanruResource::collection($danrus), 'Data danru berhasil ditampilkan.');
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
            'regu_id' => 'required',
            'avatar' => 'required',
            'nama_lengkap' => 'required',
        ]);

        // Validation Check
        if ($validator->fails()) return $this->sendError('Validation Error', $validator->errors());

        // Add New Danru Data
        $danru = Danru::create($input);

        return $this->sendResponse(new DanruResource($danru), 'Danru data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): JsonResponse
    {
        $danru = Danru::find($id);

        // Danru Check Data
        if (is_null($danru)) return $this->sendError('Danru data not found.');

        return $this->sendResponse(new DanruResource($danru), 'Data danru berhasil ditampilkan.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Danru $danru): JsonResponse
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'regu_id' => 'required',
            'avatar' => 'required',
            'nama_lengkap' => 'required'
        ]);

        // Validation Check
        if ($validator->fails()) return $this->sendError('Validation Error', $validator->errors());

        // Update Data
        $danru->regu_id = $input['regu_id'];
        $danru->avatar = $input['avatar'];
        $danru->nama_lengkap = $input['nama_lengkap'];
        $danru->save();

        return $this->sendResponse(new DanruResource($danru), 'Update data danru berhasil.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Danru $danru): JsonResponse
    {
        $danru->delete();

        return $this->sendResponse([], 'Data danru berhasil dihapus.');
    }
}
