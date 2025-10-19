<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    public function run()
    {
        $tags = [
            [
                'id' => 1,
                'name' => 'FIrst Edition',
                'slug' => 'first-edition',
                'icon' => null,
                'image' => json_encode([]),
                'details' => null,
                'type_id' => 8,
                'created_at' => '2021-12-08 13:40:17',
                'updated_at' => '2021-12-08 13:40:17'
            ],
            [
                'id' => 2,
                'name' => 'Second Edition',
                'slug' => 'second-edition',
                'icon' => null,
                'image' => json_encode([]),
                'details' => null,
                'type_id' => 8,
                'created_at' => '2021-12-08 13:40:37',
                'updated_at' => '2021-12-08 13:40:37'
            ],
            [
                'id' => 3,
                'name' => 'Third Edition',
                'slug' => 'third-edition',
                'icon' => null,
                'image' => json_encode([]),
                'details' => null,
                'type_id' => 8,
                'created_at' => '2021-12-08 13:40:49',
                'updated_at' => '2021-12-08 13:40:49'
            ],
            [
                'id' => 10,
                'name' => 'Romance',
                'slug' => 'romance',
                'icon' => null,
                'image' => json_encode([]),
                'details' => null,
                'type_id' => 8,
                'created_at' => '2021-12-08 13:43:09',
                'updated_at' => '2021-12-08 13:43:09'
            ],
            [
                'id' => 24,
                'name' => 'Fantasy',
                'slug' => 'fantasy',
                'icon' => null,
                'image' => json_encode([]),
                'details' => null,
                'type_id' => 8,
                'created_at' => '2021-12-08 14:19:57',
                'updated_at' => '2021-12-08 14:19:57'
            ]
        ];

        DB::table('tags')->insert($tags);
    }
};