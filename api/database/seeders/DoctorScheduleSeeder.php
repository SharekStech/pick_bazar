<?php

namespace Database\Seeders;

use Marvel\Models\Doctor;
use Marvel\Models\DoctorSchedule;
use Marvel\Models\Hospital;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DoctorScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker::create();
        $doctors = Doctor::all();
        $hospitals = Hospital::all()->pluck('id')->toArray();
        $days = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];

        foreach ($doctors as $doctor) {

            // Shuffle hospital IDs so each doctor gets a unique hospital
            $uniqueHospitals = $faker->shuffle($hospitals);

            foreach ($uniqueHospitals as $hospital_id) {

                // Assign 1-3 random days per schedule
                $scheduleDays = $faker->randomElements($days, $faker->numberBetween(1, 3));

                // Pick random type
                $type = $faker->randomElement(['inperson', 'virtual']);

                // Pick a single time slot for this hospital (or you can define multiple if needed)
                $startTime = $faker->randomElement(['09:00', '11:00', '13:00', '15:00']);
                $endTime = date('H:i', strtotime($startTime) + 60 * 60 * 2); // 2-hour slot

                DoctorSchedule::create([
                    'doctor_id' => $doctor->id,
                    'hospital_id' => $hospital_id, // hospital appears only once per doctor
                    'day_of_week' => $scheduleDays,
                    'type' => $type,
                    'start_time' => $startTime,
                    'end_time' => $endTime,
                    'status' => 'active',
                ]);

                // Break here if you want only ONE hospital per doctor
                // break;
            }
        }
    }
}
