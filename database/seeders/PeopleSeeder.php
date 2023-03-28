<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $person = 
        [
            [
              "name"=> "Kamran Ali",
              "profile_picture"=> "null",
              "dob"=> "29/02/23",
              "education"=> "1",
              "phone"=> "7017534437",
              "email"=> "kamran@gmail.com",
              "laqab_id"=> "1",
              "password"=> "123456789",
              "isOnline"=> "No",
              "app_registered"=> "Yes",
              "is_profile_shared"=> "No",
            ],
            
        ];
        foreach ($person as $key => $value) {
            People::create($value);
        }
            
    }
}
