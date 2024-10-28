<?php

namespace Database\Seeders;

use App\Models\Passenger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 100; $i++) {
            $newPassenger = new Passenger();
            $newPassenger->first_name = $faker->firstName();
            $newPassenger->last_name = $faker->unique()->lastName();
            $newPassenger->date_of_birth = $faker->dateTimeBetween("-80 years", "-16 years");
            $newPassenger->over_60 = $faker->boolean();
            $newPassenger->under_18 = $faker->boolean();
            $newPassenger->nationality = $faker->country();
            $newPassenger->save();
        }
    }
}