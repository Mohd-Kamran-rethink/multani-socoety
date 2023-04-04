<?php

namespace App\Http\Controllers\UserApiController;


use App\Http\Controllers\Controller;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class User extends Controller
{
    public function getOtp(Request $request)
    {
        return response()->json(['message' => 'User registered successfully']);
    }
    public function login(Request $request)
    {


        $user = People::where('app_registered', 'Yes')->where('phone', $request->phone)->first();

        if (!$user) {
            return response()->json([
                'error' => ["phone" => 'This phone number is not registered with us.'],
            ]);
        } else if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                'error' => ["password" => 'Incorrect password.'],
            ]);
        } else {
            return response()->json(['data' => $user]);
        }
    }
}
