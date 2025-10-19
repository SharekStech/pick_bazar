<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    public function run()
    {
        $profiles = [
            [
                'id' => 1,
                'avatar' => json_encode(['id' => '883', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/881/aatik-tasneem-7omHUGhhmZ0-unsplash%402x.png', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/881/conversions/aatik-tasneem-7omHUGhhmZ0-unsplash%402x-thumbnail.jpg']),
                'bio' => 'This is the store owner and we have 6 shops under our banner. We are running all the shops to give our customers hassle-free service and quality products. Our goal is to provide best possible customer service and products for our clients',
                'socials' => null,
                'contact' => '12365141641631',
                'customer_id' => 1,
                'created_at' => '2021-06-30 11:20:29',
                'updated_at' => '2021-06-30 14:13:53'
            ],
            [
                'id' => 2,
                'avatar' => json_encode(['id' => 1691, 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1691/peakpx.jpg', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1691/conversions/peakpx-thumbnail.jpg']),
                'bio' => null,
                'socials' => null,
                'contact' => '19365141641631',
                'customer_id' => 2,
                'created_at' => '2021-08-18 13:17:53',
                'updated_at' => '2022-03-17 08:25:26'
            ],
            [
                'id' => 3,
                'avatar' => json_encode(['id' => 1692, 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1692/author-img-%281%29.jpg', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1692/conversions/author-img-%281%29-thumbnail.jpg']),
                'bio' => null,
                'socials' => null,
                'contact' => null,
                'customer_id' => 4,
                'created_at' => '2022-03-17 14:15:46',
                'updated_at' => '2022-03-17 14:15:46'
            ]
        ];

        DB::table('user_profiles')->insert($profiles);
    }
};