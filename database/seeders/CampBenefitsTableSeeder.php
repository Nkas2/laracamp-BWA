<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 5,
                'name' => 'Pro Techstack Kit'
            ],
            [
                'camp_id' => 5,
                'name' => 'iMac Pro 2021 & Display'
            ],
            [
                'camp_id' => 5,
                'name' => '1-1 Mentoring Program'
            ],
            [
                'camp_id' => 5,
                'name' => 'Final Project Certificate'
            ],
            [
                'camp_id' => 5,
                'name' => 'Offline course videos'
            ],
            [
                'camp_id' => 5,
                'name' => 'Future Job Opportunity'
            ],
            [
                'camp_id' => 5,
                'name' => 'Premium Design Kit'
            ],
            [
                'camp_id' => 5,
                'name' => 'Website Builder'
            ],
            [
                'camp_id' => 6,
                'name' => '1-1 Mentoring Program'
            ],
            [
                'camp_id' => 6,
                'name' => 'Final Project Certificate'
            ],
            [
                'camp_id' => 6,
                'name' => 'Offline Course Videos'
            ],
            [
                'camp_id' => 6,
                'name' => 'Offline Course Videos'
            ],
        ];

        foreach ($campBenefits as $key => $value) {
            CampBenefit::create($value);
        }
    }
}
