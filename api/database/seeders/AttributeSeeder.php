<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeSeeder extends Seeder
{
    public function run()
    {
        $attributes = [
            ['id' => 3, 'slug' => 'color', 'name' => 'Color', 'shop_id' => 2, 'created_at' => '2021-05-09 16:10:31', 'updated_at' => '2021-05-09 16:10:31'],
            ['id' => 4, 'slug' => 'size', 'name' => 'Size', 'shop_id' => 2, 'created_at' => '2021-05-09 16:10:40', 'updated_at' => '2021-05-09 16:10:40'],
            ['id' => 5, 'slug' => 'language', 'name' => 'Language', 'shop_id' => 7, 'created_at' => '2021-12-18 12:04:40', 'updated_at' => '2021-12-18 12:04:40'],
            ['id' => 6, 'slug' => 'book-type', 'name' => 'Book Type', 'shop_id' => 7, 'created_at' => '2021-12-18 12:11:47', 'updated_at' => '2021-12-18 12:11:47'],
        ];

        DB::table('attributes')->insert($attributes);
    }
}