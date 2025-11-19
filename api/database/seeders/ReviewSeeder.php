<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        $reviews = [
            [
                'id' => 1,
                'user_id' => 2,
                'shop_id' => null,
                'product_id' => 1,
                'comment' => 'Good and yummy',
                'rating' => 4,
                'photos' => json_encode([['id' => 1689, 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1689/peakpx.jpg', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1689/conversions/peakpx-thumbnail.jpg']]),
                'created_at' => '2022-03-17 08:17:44',
                'updated_at' => '2022-03-17 16:09:51'
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'shop_id' => null,
                'product_id' => 2,
                'comment' => 'It\'s not fully fresh. Was probably a few days old already.',
                'rating' => 3,
                'photos' => json_encode([]),
                'created_at' => '2022-03-17 13:45:24',
                'updated_at' => '2022-03-17 13:45:24'
            ],
            [
                'id' => 3,
                'user_id' => 2,
                'shop_id' => null,
                'product_id' => 3,
                'comment' => 'Blueberries were good but delivery was not on time.',
                'rating' => 4,
                'photos' => json_encode([]),
                'created_at' => '2022-03-17 13:46:02',
                'updated_at' => '2022-03-17 13:46:02'
            ],
            [
                'id' => 4,
                'user_id' => 2,
                'shop_id' => null,
                'product_id' => 4,
                'comment' => 'absolutely best sprouts in town.',
                'rating' => 5,
                'photos' => json_encode([]),
                'created_at' => '2022-03-17 13:46:30',
                'updated_at' => '2022-03-17 13:46:30'
            ],
            [
                'id' => 5,
                'user_id' => 2,
                'shop_id' => null,
                'product_id' => 5,
                'comment' => 'was sliced and fresh but was not cleaned properly.',
                'rating' => 3,
                'photos' => json_encode([]),
                'created_at' => '2022-03-17 13:46:57',
                'updated_at' => '2022-03-17 13:46:57'
            ]
        ];

        DB::table('reviews')->insert($reviews);
    }
};
