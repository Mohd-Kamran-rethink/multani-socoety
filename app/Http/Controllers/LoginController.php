<?php

namespace App\Http\Controllers;

use App\Models\City;
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
    public function logout()
    {
        return redirect('/app/login')->withCookie(Cookie::forget('user'));

    }
    public function getCities(Request $req)
    {
        $cities=City::where('state_id','=',$req->state_id)->orderBy('name',"asc")->get();
       
        $html='<label class="form-label" for="form3Example1n1">Cities</label>
          <select class="form-select" onchange="getCityValue()" id="cityChange" name="cityName" >
          <option value="0">--City--</option>
          <option value="noCity">--NOT LISTED--</option>
          ';
         
          foreach($cities as $city)
         {
          $html.= '<option value='.$city->id.'>'.$city->name.'</option>';
         } 
        '</select>';
        return $html;
    
    }
}
