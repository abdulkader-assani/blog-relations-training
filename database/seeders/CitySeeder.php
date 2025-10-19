<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::create([
            'name' => 'Cairo',
            'country_id' => 1,
        ]);
        City::create([
            'name' => 'Aswan',
            'country_id' => 1,
        ]);
        City::create([
            'name' => 'Luxor',
            'country_id' => 1,
        ]);
        City::create([
            'name' => 'Sharm El-Sheikh',
            'country_id' => 1,
        ]);
        City::create([
            'name' => 'Hurghada',
            'country_id' => 1,
        ]);
        City::create([
            'name' => 'Marsa Alam',
            'country_id' => 1,
        ]);
    }
}
