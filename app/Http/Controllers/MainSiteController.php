<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class MainSiteController extends Controller
{
   public function login()
   {
       Cache::flush(); // Clears the cache
      

      if( Cookie::get('user'))
      {
           return redirect('app/dashboard');
      }
         
    return view('MainSite.Login.login');
   }
   public function register()
   {
    return view('MainSite.Login.register');
   }
   public function dashboard()
   {
      
      return view('MainSite.Dashboard.index');
   }
      

}
