<?php

namespace Database\Seeders;

use Marvel\Models\Doctor;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Doctor::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'speciality' => $faker->randomElement(['Cardiologist', 'Dermatologist', 'Neurologist', 'Pediatrician', 'Oncologist']),
                'experience_years' => $faker->numberBetween(1, 30),
                'languages' => 'English, Spanish',
                'location' => $faker->city,
                'rating' => $faker->randomFloat(2, 3, 5),
                'reviews_count' => $faker->numberBetween(10, 200),
                'fee' => $faker->randomFloat(2, 100, 500),
                'address' => $faker->address,
                'profile' => 'assets/uploads/doctors/profile.jpg',
                'cover_image' => 'assets/uploads/doctors/cover.jpg',
            ]);
        }
    }
}
