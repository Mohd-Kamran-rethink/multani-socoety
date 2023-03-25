<?php

namespace App\Http\Controllers\UserApiController;


use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Request;

class User extends Controller
{
    public function getOtp(Request $request)
    {
        return response()->json(['message' => 'User registered successfully']);
    }
}
