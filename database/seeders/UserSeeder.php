<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Abd',
            'email' => 'abd@example.com',
            'password' => '1234',
            'city_id' => City::where('name', 'Cairo')->first()->id,
        ]);
        User::factory()->create([
            'name' => 'Ahmed',
            'email' => 'ahmed@example.com',
            'password' => '1234',
            'city_id' => City::where('name', 'Aswan')->first()->id,
        ]);
        User::factory()->create([
            'name' => 'Mohamed',
            'email' => 'mohamed@example.com',
            'password' => '1234',
            'city_id' => City::where('name', 'Luxor')->first()->id,
        ]);
        User::factory()->create([
            'name' => 'Ali',
            'email' => 'ali@example.com',
            'password' => '1234',
            'city_id' => City::where('name', 'Sharm El-Sheikh')->first()->id,
        ]);
        User::factory()->create([
            'name' => 'Youssef',
            'email' => 'youssef@example.com',
            'password' => '1234',
            'city_id' => City::where('name', 'Hurghada')->first()->id,
        ]);
    }
}
