<?php

namespace App\Http\Controllers\Laqabs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\laqabsModel;

class laqabs extends Controller
{
    public function list()
    {
        $laqabs=laqabsModel::get();
        return view('Admin.Laqabs.list',compact('laqabs'));
    }
    public function addForm()
    {
        return view('Admin.Laqabs.add');
    }
    public function add(Request $req)
    {
        $laqab=new laqabsModel();
        $laqab->laqab=$req->laqab;
        $laqab->save();
    }
}
