<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\DanruDataController;
use App\Http\Controllers\API\KategoriDataController;
use App\Http\Controllers\API\ReguDataController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('danru', DanruDataController::class);
    Route::resource('category', KategoriDataController::class);
    Route::resource('regu', ReguDataController::class);
    Route::post('logout', [AuthController::class, 'logout']);
});
