<?php

namespace App\Http\Controllers\Bureau;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bureau;
use App\Models\Image;
use App\Models\Laqab;
use App\Models\People ;
use App\Models\State;
use App\Models\Qualification;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class BureauController extends Controller
{
    public function landingPage()
    {
        return view('MainSite.Bureau.landingPage');
    }
    public function add()
    {
        $currentUser=People::find(json_decode(Cookie::get('user'))->id );
        $isBureau=Bureau::where('user_id','=',$currentUser->id)->first();
        $states=State::where("country_id",'=','101')->orderBy('name','asc')->get();
        $laqabs=Laqab::orderBy('laqab','asc')->get();
        $qualifications=Qualification::orderBy('title','asc')->get();
        $userData=People::where('phone','=',$currentUser->phone)->where('app_registered','=','Yes')->first();
        if($currentUser->is_profile_shared=="No")
        {
            // if user has added bureau details but not completed profile show with user bureau data
            if($isBureau)
            {
                return view('MainSite.Bureau.add',compact('states','laqabs','qualifications','userData','isBureau'));
            }
            else
            {
                return view('MainSite.Bureau.add',compact('states','laqabs','qualifications','userData'));
            }
                


        }
        else
        {
            return redirect('app/bureau/profile/status');
        }

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
        $Bureau=new Bureau();
        $Bureau->full_name=$req->name;
        $Bureau->user_id=json_decode(Cookie::get('user'))->id;
        $Bureau->dob=$req->dob;
        $Bureau->phone=$req->phone;
        $Bureau->state_id=$req->state;
        $Bureau->city_id=$req->city;
        $Bureau->qualification_id=$req->qualification;
        $Bureau->gender=$req->gender;
        $Bureau->laqab_id=$req->laqab;
        $Bureau->add_more=$req->add_more;
        $Bureau->save();
        return redirect('app/bureau/photos/add')->with(["success-msg"=>"Profile Updated please add share you photos"]);
    }
    public function uploadImageForm()
    {
        return view('MainSite.Bureau.sharePhotos');
    }
    public function uploadImage(Request $req)
    {   
        $file = request()->file('file');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/Bureau/Images/', $filename);
        return response()->json(['success' => true,'filename'=>$filename]);
    }
    public function completeProfile($type)
    {
        if($type=="shareProfile")
        {
            $currentUser=People::find(json_decode(Cookie::get('user'))->id);
            $currentUser->bureau_image_type="profile";
            $currentUser->is_profile_shared="Yes";
            $currentUser->update();
        }
        else if($type=="addImages")
        {
            $currentUser=People::find(json_decode(Cookie::get('user'))->id );
            $currentUser->bureau_image_type="new";
            $currentUser->is_profile_shared="Yes";
            $currentUser->update();
               
        }
        return redirect('/app/dashboard')->with(['success-msg'=>"Your profile is submited for approval"]);

        
        // need to delete all images from bureau images
    }
    
    public function profileStatus()
    {
        $currentUser=People::find(json_decode(Cookie::get('user'))->id );
        // $BureauData=DB::table('bureaus')
        //                 ->join('')
                            
                            

        $BureauData = Bureau::
        join('cities', 'bureaus.city_id', '=', 'cities.id')
        ->join('states', 'bureaus.state_id', '=', 'states.id')
        ->join('qualifications', 'bureaus.qualification_id', '=', 'qualifications.id')
        ->select('bureaus.*', 'cities.name as city_name', 'states.name as state_name','qualifications.title as qualification_title')
        ->where('bureaus.user_id','=',$currentUser->id)->first();
        
                    
        $bureauImages=Image::where('user_id','=',$currentUser->id)->get();  
        return view('MainSite.Bureau.profileStatus',compact('BureauData',"currentUser","bureauImages"));
    }
    
}
