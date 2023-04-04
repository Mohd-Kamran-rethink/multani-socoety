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
        $validatedData = $request->validate([
            'phone' => ['required', 'string', 'regex:/^\d{10}$/'],
            'password' => ['required', 'string'],
        ], [
            'phone.required' => 'The phone field is required.',
            'phone.string' => 'The phone field must be a string.',
            'phone.regex' => 'The phone field must be a valid 10-digit phone number.',
            'password.required' => 'The password field is required.',
            'password.string' => 'The password field must be a string.',
        ]);

        $user = People::where('phone', $validatedData['phone'])->first();

        if (!$user) {
            return response()->json([
                'phone' => ['The provided phone is not registered with us.'],
            ], 401);
        } else {
            if (!Hash::check($validatedData['password'], $user->password)) {
                return response()->json([
                    'password' => ['The provided phone and password combination is incorrect.'],
                ], 401);
            }
        }



        return response()->json(['user' => $user]);
    }
}
