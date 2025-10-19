<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    public function run()
    {
        DB::table('address')->insert([
            [
                'id' => 1,
                'title' => 'Billing',
                'type' => 'billing',
                'default' => false,
                'address' => json_encode([
                    'zip' => '99614',
                    'city' => 'Kipnuk',
                    'state' => 'AK',
                    'country' => 'United States',
                    'street_address' => '2231 Kidd Avenue'
                ]),
                'customer_id' => 2,
                'created_at' => '2021-08-18 13:18:03',
                'updated_at' => '2021-08-18 13:18:03',
            ],
            [
                'id' => 2,
                'title' => 'Shipping',
                'type' => 'shipping',
                'default' => false,
                'address' => json_encode([
                    'zip' => '40391',
                    'city' => 'Winchester',
                    'state' => 'KY',
                    'country' => 'United States',
                    'street_address' => '2148  Straford Park'
                ]),
                'customer_id' => 2,
                'created_at' => '2021-08-18 13:18:12',
                'updated_at' => '2021-08-18 13:18:12',
            ],
            [
                'id' => 3,
                'title' => 'Billing',
                'type' => 'billing',
                'default' => false,
                'address' => json_encode([
                    'zip' => '8021',
                    'city' => 'zurich',
                    'state' => 'California',
                    'country' => 'Switzerland',
                    'street_address' => '44444'
                ]),
                'customer_id' => 4,
                'created_at' => '2022-03-17 14:17:05',
                'updated_at' => '2022-03-17 14:17:05',
            ],
            [
                'id' => 4,
                'title' => 'Shipping',
                'type' => 'shipping',
                'default' => false,
                'address' => json_encode([
                    'zip' => '8021',
                    'city' => 'zurich',
                    'state' => 'California',
                    'country' => 'Switzerland',
                    'street_address' => '44444'
                ]),
                'customer_id' => 4,
                'created_at' => '2022-03-17 14:17:15',
                'updated_at' => '2022-03-17 14:17:15',
            ],
            [
                'id' => 7,
                'title' => 'Billing',
                'type' => 'billing',
                'default' => false,
                'address' => json_encode([
                    'zip' => '40391',
                    'city' => 'Winchester',
                    'state' => 'KY',
                    'country' => 'United States',
                    'street_address' => '2148  Straford Park'
                ]),
                'customer_id' => 5,
                'created_at' => '2022-03-21 00:44:48',
                'updated_at' => '2022-03-21 00:44:48',
            ],
            [
                'id' => 8,
                'title' => 'Shipping',
                'type' => 'shipping',
                'default' => false,
                'address' => json_encode([
                    'zip' => '99614',
                    'city' => 'Kipnuk',
                    'state' => 'AK',
                    'country' => 'United States',
                    'street_address' => '2231 Kidd Avenue'
                ]),
                'customer_id' => 5,
                'created_at' => '2022-03-21 00:44:58',
                'updated_at' => '2022-03-21 00:44:58',
            ],
        ]);
    }
}