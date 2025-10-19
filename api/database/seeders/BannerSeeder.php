<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    public function run()
    {
        $banners = [
            [
                'id' => 12,
                'type_id' => 1,
                'title' => 'Groceries Delivered in 90 Minute',
                'description' => 'Get your healthy foods & snacks delivered at your doorsteps all day everyday',
                'image' => '{"id": 907, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/904/grocery.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/904/conversions/grocery-thumbnail.jpg"}',
                'created_at' => '2021-07-17 13:21:55',
                'updated_at' => '2021-07-17 13:21:55'
            ],
            [
                'id' => 13,
                'type_id' => 2,
                'title' => 'Get Your Bakery Items Delivered',
                'description' => 'Get your favorite bakery items baked and delivered to your doorsteps at any time',
                'image' => '{"id": 908, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/905/bakery.jpg", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/905/conversions/bakery-thumbnail.jpg"}',
                'created_at' => '2021-07-17 13:22:34',
                'updated_at' => '2021-07-17 13:22:34'
            ],
            [
                'id' => 14,
                'type_id' => 3,
                'title' => 'Branded & imported makeups',
                'description' => 'Easiest and cheapest way to get your branded & imported makeups',
                'image' => '{"id": 909, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/906/makeup.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/906/conversions/makeup-thumbnail.jpg"}',
                'created_at' => '2021-07-17 13:23:05',
                'updated_at' => '2021-07-17 13:23:05'
            ],
            [
                'id' => 15,
                'type_id' => 4,
                'title' => 'Exclusive Branded bags',
                'description' => 'Get your exclusive & branded bags delivered to you in no time',
                'image' => '{"id": 910, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/907/bags.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/907/conversions/bags-thumbnail.jpg"}',
                'created_at' => '2021-07-17 13:23:32',
                'updated_at' => '2021-07-17 13:23:32'
            ],
            [
                'id' => 16,
                'type_id' => 5,
                'title' => 'Shop your designer dresses',
                'description' => 'Ready to wear dresses tailored for you online. Hurry up while stock lasts.',
                'image' => '{"id": 911, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/908/cloths.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/908/conversions/cloths-thumbnail.jpg"}',
                'created_at' => '2021-07-17 13:24:28',
                'updated_at' => '2021-07-17 13:24:28'
            ],
            [
                'id' => 18,
                'type_id' => 6,
                'title' => 'Exclusive furniture on cheap price',
                'description' => 'Make your house a home with our wide collection of beautiful furniture',
                'image' => '{"id": 922, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/922/furniture-banner-1.jpg", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/922/conversions/furniture-banner-1-thumbnail.jpg"}',
                'created_at' => '2021-08-18 18:45:54',
                'updated_at' => '2021-08-18 18:45:54'
            ],
            [
                'id' => 19,
                'type_id' => 6,
                'title' => 'Furniter 2',
                'description' => null,
                'image' => '{"id": 923, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/923/furniture-banner-2.jpg", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/923/conversions/furniture-banner-2-thumbnail.jpg"}',
                'created_at' => '2021-08-18 18:45:54',
                'updated_at' => '2021-08-18 18:45:54'
            ],
            [
                'id' => 23,
                'type_id' => 7,
                'title' => 'You Deserve To Eat Fresh',
                'description' => 'We source the best healthy foods for you.',
                'image' => '{"id": 1344, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1344/shutterstock_389040853-%281%29.jpg", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1344/conversions/shutterstock_389040853-%281%29-thumbnail.jpg"}',
                'created_at' => '2021-10-19 04:04:19',
                'updated_at' => '2021-10-19 04:04:19'
            ],
            [
                'id' => 26,
                'type_id' => 8,
                'title' => 'book banner',
                'description' => 'this the book demo banner',
                'image' => '{"id": 1376, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1376/Cover.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1376/conversions/Cover-thumbnail.jpg"}',
                'created_at' => '2021-12-08 13:06:56',
                'updated_at' => '2021-12-08 13:06:56'
            ]
        ];

        DB::table('banners')->insert($banners);
    }
}