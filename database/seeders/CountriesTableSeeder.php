<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['name' => 'Nigeria', 'flag' => '🇳🇬'],
            ['name' => 'South Africa', 'flag' => '🇿🇦'],
            ['name' => 'United States', 'flag' => '🇺🇸'],
            // Add more countries here...
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
