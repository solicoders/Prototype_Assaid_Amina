<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                'date_creation' => now(),
                'date_modification' => now(),
                'reference' => '',
                'nom' => 'Tanger',
                'code_postal' => '90000',
            ],
            [
                'date_creation' => now(),
                'date_modification' => now(),
                'reference' => '',
                'nom' => 'Madrid',
                'code_postal' => '67890',
            ],
            [
                'date_creation' => now(),
                'date_modification' => now(),
                'reference' => '',
                'nom' => 'Marseille',
                'code_postal' => '75000',
            ],
            [
                'date_creation' => now(),
                'date_modification' => now(),
                'reference' => '',
                'nom' => 'Cologne',
                'code_postal' => '10115',
            ],

        ];

        // Insert data into the 'Cities' table
        DB::table('Cities')->insert($cities);
    }
}
