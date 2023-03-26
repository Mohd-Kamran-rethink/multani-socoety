<?php

namespace App\Http\Controllers\People;

use App\Models\People;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Laqab;
use App\Models\State;
use App\Models\Qualification;
use Maatwebsite\Excel\Facades\Excel;

class PeopleController extends Controller
{
    public function Peoplelist()
    {
        $peoples = People::get();
        return view('Admin.People.list', compact('peoples'));
    }
    public function addForm()
    {
        $laqabs = Laqab::orderBy('laqab', 'ASC')->get();
        $qualifications = Qualification::orderBy('title', 'ASC')->get();
        $states = State::where('country_id', '=', '101')->orderBy('name', 'asc')->get();

        return view('Admin.People.add', compact('laqabs', 'qualifications', 'states'));
    }
    public function getList(Request $req)
    {
        if ($req->ajax()) {
            $cities = City::where('state_id', '=', $req->cityId)->orderBy('name', 'asc')->get();

            $html = '
          <label for="exampleFormControlInput1" class="form-label">City</label>
            <select class="form-control" name="city">
            <option value="0">--Choose--</option>
            ';

            foreach ($cities as $city) {
                $html .= '<option value=' . $city->id . '>' . $city->name . '</option>';
            }
            '</select>';
            return $html;
        }
    }
    public function add(Request $req)
    {
        $people = new People();
        $people->name = $req->name;
        $people->laqab_id = $req->laqab;
        $people->fatherName = $req->father;
        $people->phone = $req->Phone;
        $people->dob = $req->dob;
        $people->qualification = $req->qualification;
        $people->pradesh_id = $req->pradesh;
        $people->city_id = $req->city;
        $people->save();
    }
    public function importPage()
    {
        return view('Admin.People.import');
    }
    public function import(Request $request)
    {

        $file = $request->file('file');
        $data = Excel::toArray(new People, $file)[0]; // Get the data array and use the first element since toArray returns an array of arrays

        foreach ($data as $row) {

            $person = new People;
            $person->name = $row[0];
            $person->laqab_id = $row[1];
            $person->fatherName = $row[2];
            $person->phone = $row[3];
            $person->dob = $row[4];
            $person->qualification = $row[5];
            $person->pradesh_id = $row[6];
            $person->city_id = $row[7];
            $person->save();
        }
        return response()->json($data);
    }
}
