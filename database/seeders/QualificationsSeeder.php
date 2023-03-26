<?php

namespace Database\Seeders;

use App\Models\Qualification;
use Illuminate\Database\Seeder;

class QualificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $qualifications = 
        [
            [
              "title"=> "10th Standard or Secondary School Certificate (SSC)"
            ],
            [
              "title"=> "12th Standard or Higher Secondary Certificate (HSC)"
            ],
            [
              "title"=> "Graduation Degree (Bachelor's Degree)"
            ],
            [
              "title"=> "Post-Graduation Degree (Master's Degree)"
            ],
            [
              "title"=> "Doctorate Degree (Ph.D.)"
            ],
            [
              "title"=> "ITI (Industrial Training Institutes) Certificate"
            ],
            [
              "title"=> "Diploma in Engineering"
            ],
            [
              "title"=> "Certificate courses in various fields"
            ],
            [
              "title"=> "CA (Chartered Accountancy)"
            ],
            [
              "title"=> "CS (Company Secretary)"
            ],
            [
              "title"=> "CMA (Cost and Management Accountancy)"
            ],
            [
              "title"=> "LLB (Bachelor of Laws)"
            ],
            [
              "title"=> "MBA (Master of Business Administration)"
            ],
            [
              "title"=> "B.Tech (Bachelor of Technology)"
            ],
            [
              "title"=> "M.Tech (Master of Technology)"
            ],
            [
              "title"=> "BE (Bachelor of Engineering)"
            ],
            [
              "title"=> "ME (Master of Engineering)"
            ],
            [
              "title"=> "MBBS (Bachelor of Medicine and Bachelor of Surgery)"
            ],
            [
              "title"=> "MD (Doctor of Medicine)"
            ],
            [
              "title"=> "MS (Master of Surgery)"
            ],
            [
              "title"=> "BDS (Bachelor of Dental Surgery)"
            ],
            [
              "title"=> "MDS (Master of Dental Surgery)"
            ],
            [
              "title"=> "Diploma in Education"
            ],
            [
              "title"=> "B.Ed. (Bachelor of Education)"
            ],
            [
              "title"=> "M.Ed. (Master of Education)"
            ],
            [
              "title"=> "B.Lib. (Bachelor of Library Science)"
            ],
            [
              "title"=> "M.Lib. (Master of Library Science)"
            ]
        ];
        foreach ($qualifications as $key => $item) {
            Qualification::create($item);
        }
          
    
        }
}
