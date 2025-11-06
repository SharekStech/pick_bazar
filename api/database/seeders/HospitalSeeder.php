<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Marvel\Models\Hospital;
use Illuminate\Database\Seeder;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            Hospital::create([
                'name' => $faker->company . ' Hospital',
                'address' => $faker->address,
                'city' => $faker->city,
                'country' => $faker->country,
            ]);
        }
    }
}
