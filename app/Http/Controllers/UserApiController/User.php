<?php

namespace App\Http\Controllers\UserApiController;


use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Laqab;
use App\Models\People;
use App\Models\Qualification;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class User extends Controller
{
    public function otp(Request $request)
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
    public function sendOtp(Request $req)
    {
        // $otp=random_int(999,10000);
        $otp=1234;
        return response()->json([
            'error' => false,
            'message' => 'Otp has been sent to '.$req->phone,
            'data' => ['otp'=>$otp],
        ], 200);
    }
    // public function getDataRegister()
    // {
    //     $laqabs = Laqab::orderBy('laqab', 'ASC')->get();
    //     $qualifications = Qualification::orderBy('title', 'ASC')->get();
    //     $states = State::where('country_id', '=', '101')->orderBy('name', 'asc')->get();
    //      return response()->json([
    //         'error' => false,
    //         'message' => 'Data fetched successfully',
    //         'data' => ['laqabs'=>$laqabs,'qualifications'=>$qualifications,'states'=>$states],
    //     ], 200);
    // }
    // public function getCities(Request $req)
    // {
    //     $cities = City::where('state_id', '=', $req->city_id)->orderBy('name', 'asc')->get();
    //     return response()->json([
    //         'error' => true,
    //         'message' => 'The given data was invalid.',
    //         'data' => ['cities'=>$cities],
    //     ], 200);
    // }
    // public function register(Request $req)
    // {
    //     $validator = Validator::make($req->all(), [
    //         'name' => 'required|string|max:255',
    //         'phone' => 'required|unique:people,phone',
    //         'password' => 'required',
    //     ]);
          
    //     if ($validator->fails()) {
    //         $errors = $validator->errors();
    //         $response = [];
    //         foreach ($errors->keys() as $key) {
    //             $response[] = [
    //                 'field' => $key,
    //                 'message' => $errors->first($key),
    //             ];
    //         }

    //         return response()->json([
    //             'error' => true,
    //             'message' => 'The given data was invalid.',
    //             'data' => $response,
    //         ], 200);
    //     } else {

    //         $user = new People();
    //         $user->name = $req->name;
    //         $user->phone = $req->phone;
    //         $user->password = Hash::make($req->password);
    //         $user->app_registered = "Yes";
    //         $user->is_profile_shared = "No";
    //         $result = $user->save();
    //         if ($result) {
    //             return response()->json([
    //                 'error' => false,
    //                 'message' => 'Successfully registered',
    //                 'data' => $user,
    //             ], 200);
    //         }
    //     }
    // }
}
