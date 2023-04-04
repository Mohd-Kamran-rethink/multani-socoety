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
            'phone.required' => 'Phone is required.',
            'phone.string' => 'Phone must be a string.',
            'phone.regex' => 'Phone must be a valid 10-digit.',
            'password.required' => 'Password is required.',
            'password.string' => 'Password must be a string.',
        ]);

        $user = People::where('app_registered', 'Yes')->where('phone', $validatedData['phone'])->first();

        if (!$user) {
            return response()->json([
                'phone' => ['This phone number is not registered with us.'],
            ], 401);
        } else {
            if (!Hash::check($validatedData['password'], $user->password)) {
                return response()->json([
                    'password' => ['Incorrect password.'],
                ], 401);
            }
        }



        return response()->json(['user' => $user]);
    }
}
