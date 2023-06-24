<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Regu;
use App\Http\Resources\ReguResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class ReguDataController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        $regu = Regu::all();

        return $this->sendResponse(ReguResource::collection($regu), 'Data regu berhasil ditampilkan.');
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
            'nama_regu' => 'required',
            'lokasi' => 'required'
        ]);

        // Validation Check
        if ($validator->fails()) return $this->sendError('Validation Error', $validator->errors());

        // Add New Danru Data
        $regu = Regu::create($input);

        return $this->sendResponse(new ReguResource($regu), 'Regu data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): JsonResponse
    {
        $regu = Regu::find($id);

        // Danru Check Data
        if (is_null($regu)) return $this->sendError('Regu data not found.');

        return $this->sendResponse(new ReguResource($regu), 'Data regu berhasil ditampilkan.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regu $regu): JsonResponse
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'nama_regu' => 'required',
            'lokasi' => 'required'
        ]);

        // Validation Check
        if ($validator->fails()) return $this->sendError('Validation Error', $validator->errors());

        // Update Data
        $regu->nama_regu = $input['nama_regu'];
        $regu->lokasi = $input['lokasi'];
        $regu->save();

        return $this->sendResponse(new ReguResource($regu), 'Update data regu berhasil.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regu $regu): JsonResponse
    {
        $regu->delete();

        return $this->sendResponse([], 'Data regu berhasil dihapus.');
    }
}
