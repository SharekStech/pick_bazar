<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponSeeder extends Seeder
{
    public function run()
    {
        $coupons = [
            [
                'id' => 1,
                'code' => 'EID2',
                'description' => null,
                'image' => '{"id": 933, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/933/2x2x.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/933/conversions/2x2x-thumbnail.jpg"}',
                'type' => 'fixed',
                'amount' => 2.00,
                'active_from' => '2021-03-10 21:48:15',
                'expire_at' => '2024-07-27 21:48:15',
                'created_at' => '2021-03-10 21:49:46',
                'updated_at' => '2021-08-19 04:00:12',
                'deleted_at' => null
            ],
            [
                'id' => 2,
                'code' => 'FOO',
                'description' => null,
                'image' => '{"id": 932, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/932/8x2x.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/932/conversions/8x2x-thumbnail.jpg"}',
                'type' => 'fixed',
                'amount' => 8.00,
                'active_from' => '2021-03-27 05:33:22',
                'expire_at' => '2024-05-26 05:33:22',
                'created_at' => '2021-03-27 05:34:30',
                'updated_at' => '2021-08-19 04:00:00',
                'deleted_at' => null
            ],
            [
                'id' => 3,
                'code' => 'EID12',
                'description' => null,
                'image' => '{"id": 931, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/931/12x2x.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/931/conversions/12x2x-thumbnail.jpg"}',
                'type' => 'fixed',
                'amount' => 12.00,
                'active_from' => '2021-03-27 20:48:28',
                'expire_at' => '2024-05-26 20:48:28',
                'created_at' => '2021-03-27 20:49:30',
                'updated_at' => '2021-08-19 03:59:49',
                'deleted_at' => null
            ],
            [
                'id' => 4,
                'code' => 'HELLO15',
                'description' => null,
                'image' => '{"id": 930, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/930/15x2x.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/930/conversions/15x2x-thumbnail.jpg"}',
                'type' => 'fixed',
                'amount' => 15.00,
                'active_from' => '2021-03-27 20:48:28',
                'expire_at' => '2024-04-23 20:48:28',
                'created_at' => '2021-03-27 20:53:35',
                'updated_at' => '2021-08-19 03:59:38',
                'deleted_at' => null
            ],
            [
                'id' => 5,
                'code' => 'BAZAR18',
                'description' => null,
                'image' => '{"id": 929, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/929/18x2x.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/929/conversions/18x2x-thumbnail.jpg"}',
                'type' => 'fixed',
                'amount' => 18.00,
                'active_from' => '2021-03-27 20:55:49',
                'expire_at' => '2024-04-15 20:55:49',
                'created_at' => '2021-03-27 20:56:23',
                'updated_at' => '2021-08-19 03:59:29',
                'deleted_at' => null
            ],
            [
                'id' => 6,
                'code' => 'BAZAR20',
                'description' => null,
                'image' => '{"id": 928, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/928/20x2x.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/928/conversions/20x2x-thumbnail.jpg"}',
                'type' => 'fixed',
                'amount' => 20.00,
                'active_from' => '2021-03-27 20:55:49',
                'expire_at' => '2024-04-26 20:55:49',
                'created_at' => '2021-03-27 21:00:04',
                'updated_at' => '2021-08-19 03:59:18',
                'deleted_at' => null
            ],
            [
                'id' => 7,
                'code' => 'BAZAR10',
                'description' => null,
                'image' => '{"id": 927, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/927/10x2x.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/927/conversions/10x2x-thumbnail.jpg"}',
                'type' => 'fixed',
                'amount' => 10.00,
                'active_from' => '2021-03-28 05:46:42',
                'expire_at' => '2025-05-26 05:46:42',
                'created_at' => '2021-03-28 05:47:25',
                'updated_at' => '2021-08-19 03:59:09',
                'deleted_at' => null
            ],
            [
                'id' => 8,
                'code' => 'OFF6',
                'description' => null,
                'image' => '{"id": 926, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/926/6x2x.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/926/conversions/6x2x-thumbnail.jpg"}',
                'type' => 'fixed',
                'amount' => 6.00,
                'active_from' => '2021-03-28 05:46:42',
                'expire_at' => '2024-07-14 05:46:42',
                'created_at' => '2021-03-28 05:47:55',
                'updated_at' => '2021-08-19 03:58:43',
                'deleted_at' => null
            ],
            [
                'id' => 9,
                'code' => '5OFF',
                'description' => null,
                'image' => '{"id": 925, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/925/5x2x.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/925/conversions/5x2x-thumbnail.jpg"}',
                'type' => 'fixed',
                'amount' => 5.00,
                'active_from' => '2021-03-28 05:46:42',
                'expire_at' => '2024-06-23 05:46:42',
                'created_at' => '2021-03-28 05:48:16',
                'updated_at' => '2021-08-19 03:58:34',
                'deleted_at' => null
            ],
            [
                'id' => 10,
                'code' => '4OFF',
                'description' => null,
                'image' => '{"id": 924, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/924/4x2x.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/924/conversions/4x2x-thumbnail.jpg"}',
                'type' => 'fixed',
                'amount' => 4.00,
                'active_from' => '2021-03-28 05:46:42',
                'expire_at' => '2024-03-28 05:46:42',
                'created_at' => '2021-03-28 05:48:39',
                'updated_at' => '2021-08-19 03:55:53',
                'deleted_at' => null
            ]
        ];

        DB::table('coupons')->insert($coupons);
    }
}