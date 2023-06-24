<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;

class AuthController extends BaseController
{
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request): JsonResponse
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['token'] =  $user->createToken('api_token')->plainTextToken;
            $success['name'] =  $user->name;

            return $this->sendResponse($success, 'Berhasil Login.');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }
    }

    /**
     * Logout API
     * 
     */
    public function logout(Request $request)
    {
        $success = $request->user()->tokens()->delete();
        return $this->sendResponse($success, 'Berhasil Logout');
    }
}
