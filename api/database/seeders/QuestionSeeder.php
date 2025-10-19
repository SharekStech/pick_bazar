<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            [
                'id' => 1,
                'user_id' => 2,
                'shop_id' => 6,
                'product_id' => 2,
                'question' => 'Hi \nIs this a Fresh product?',
                'answer' => 'yes these are fresh products.',
                'created_at' => '2022-03-17 13:13:14',
                'updated_at' => '2022-03-17 13:43:33'
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'shop_id' => 6,
                'product_id' => 1,
                'question' => 'Hi\nHow long I can store this product?',
                'answer' => 'in freezer you can store theme for about 2 weeks in minimum',
                'created_at' => '2022-03-17 13:14:10',
                'updated_at' => '2022-03-17 13:43:17'
            ],
            [
                'id' => 3,
                'user_id' => 2,
                'shop_id' => 6,
                'product_id' => 3,
                'question' => 'Hi\nFrom which country it is imported?',
                'answer' => 'its imported from Europe.',
                'created_at' => '2022-03-17 13:15:11',
                'updated_at' => '2022-03-17 13:42:58'
            ],
            [
                'id' => 4,
                'user_id' => 2,
                'shop_id' => 6,
                'product_id' => 4,
                'question' => 'Hi\nFrom where this is imported?',
                'answer' => 'these are imported from Latin America',
                'created_at' => '2022-03-17 13:15:50',
                'updated_at' => '2022-03-17 13:51:35'
            ],
            [
                'id' => 5,
                'user_id' => 2,
                'shop_id' => 6,
                'product_id' => 5,
                'question' => 'Hi\nis this sliced?',
                'answer' => 'yes these are sliced.',
                'created_at' => '2022-03-17 13:16:09',
                'updated_at' => '2022-03-17 13:42:46'
            ]
        ];

        DB::table('questions')->insert($questions);
    }
};