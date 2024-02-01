<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrysDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'date_creation' => now(),
                'date_modification' => now(),
                'reference' => '',
                'nom' => 'Maroc',
                'capital' => 'Rabat',
            ],
            [
                'date_creation' => now(),
                'date_modification' => now(),
                'reference' => '',
                'nom' => 'Spain',
                'capital' => 'Capital2',
            ],
            [
                'date_creation' => now(),
                'date_modification' => now(),
                'reference' => '',
                'nom' => 'France',
                'capital' => 'Paris',
            ],
            [
                'date_creation' => now(),
                'date_modification' => now(),
                'reference' => '',
                'nom' => 'Allemagne',
                'capital' => 'Berlin',
            ],

        ];

        // Insert data into the 'countrys' table
        DB::table('countrys')->insert($countries);
    }
}
