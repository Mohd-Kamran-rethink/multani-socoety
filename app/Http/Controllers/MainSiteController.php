<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainSiteController extends Controller
{
   public function login()
   {
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
