<?php

namespace App\Http\Controllers\Bureau;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Laqab;
use App\Models\People ;
use App\Models\State;
use App\Models\Qualification;
use Illuminate\Support\Facades\Cookie;


class BureauController extends Controller
{
    public function add()
    {
        $currentUser= json_decode(Cookie::get('user'));
        $states=State::where("country_id",'=','101')->orderBy('name','asc')->get();
        $laqabs=Laqab::orderBy('laqab','asc')->get();
        $qualifications=Qualification::orderBy('title','asc')->get();
        $userData=People::where('phone','=',$currentUser->phone)->where('app_registered','=','Yes')->first();
        
        return view('MainSite.Bureau.add',compact('states','laqabs','qualifications','userData'));
    }
    public function upload(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'dob'=>'required',
            'phone'=>'required',
            'state'=>'required|not_in:0',
            'city'=>'required|not_in:0',
            'qualification'=>'required|not_in:0',
            'gender'=>'required',
        ]);
    }
    public function uploadImage(Request $req)
    {
        $file = request()->file('file');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/Bureau/Images/', $filename);
        return response()->json(['success' => true,'filename'=>$filename]);
    }
}
