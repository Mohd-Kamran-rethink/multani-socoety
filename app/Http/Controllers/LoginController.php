<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Response;
class LoginController extends Controller
{
    public function login(Request $req)
    {
        $req->validate([
            'phone'=>"required",
            'password'=>"required",
        ]);
        $people=People::where('phone','=',$req->phone)->first();
        // dd($people);
        if(!$people)
        {
            return redirect()->back()->with(['session-message'=>"Your phone number is not registered with us!"]);
        }
        else
        {
            if(Hash::check( $req->password,$people->password)) 
            {
               
                return redirect('/app/dashboard')->withCookie('user', $people, 60 * 24 * 365 * 100);;
            }
            else
            {
                return redirect()->back()->with(['password-message'=>"Incorrect Password!"]);
            }
        }
    }
}
