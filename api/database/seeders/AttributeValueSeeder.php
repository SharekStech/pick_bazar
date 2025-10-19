<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeValueSeeder extends Seeder
{
    public function run()
    {
        $attributeValues = [
            ['id' => 8, 'slug' => 'red', 'attribute_id' => 3, 'value' => 'Red', 'language' => 'en', 'meta' => '#ce1f6a', 'created_at' => '2021-05-09 16:10:56', 'updated_at' => '2021-05-09 18:53:16'],
            ['id' => 9, 'slug' => 'blue', 'attribute_id' => 3, 'value' => 'Blue', 'language' => 'en', 'meta' => '#344fa1', 'created_at' => '2021-05-09 16:11:20', 'updated_at' => '2021-05-09 18:52:35'],
            ['id' => 10, 'slug' => 'white', 'attribute_id' => 3, 'value' => 'White', 'language' => 'en', 'meta' => '#e1e5ea', 'created_at' => '2021-05-09 16:11:35', 'updated_at' => '2021-05-09 18:58:16'],
            ['id' => 11, 'slug' => 's', 'attribute_id' => 4, 'value' => 'S', 'language' => 'en', 'meta' => null, 'created_at' => '2021-05-09 16:11:43', 'updated_at' => '2021-05-09 16:11:43'],
            ['id' => 12, 'slug' => 'm', 'attribute_id' => 4, 'value' => 'M', 'language' => 'en', 'meta' => null, 'created_at' => '2021-05-09 16:11:50', 'updated_at' => '2021-05-09 16:11:50'],
            ['id' => 13, 'slug' => 'l', 'attribute_id' => 4, 'value' => 'L', 'language' => 'en', 'meta' => null, 'created_at' => '2021-05-09 17:45:30', 'updated_at' => '2021-05-09 17:45:30'],
            ['id' => 14, 'slug' => 'xl', 'attribute_id' => 4, 'value' => 'XL', 'language' => 'en', 'meta' => null, 'created_at' => '2021-05-09 17:45:39', 'updated_at' => '2021-05-09 17:45:39'],
            ['id' => 15, 'slug' => 'english', 'attribute_id' => 5, 'value' => 'English', 'language' => 'en', 'meta' => null, 'created_at' => '2021-12-18 12:04:40', 'updated_at' => '2021-12-18 12:04:40'],
            ['id' => 16, 'slug' => 'arabic', 'attribute_id' => 5, 'value' => 'Arabic', 'language' => 'en', 'meta' => null, 'created_at' => '2021-12-18 12:04:40', 'updated_at' => '2021-12-18 12:04:40'],
            ['id' => 17, 'slug' => 'spanish', 'attribute_id' => 5, 'value' => 'Spanish', 'language' => 'en', 'meta' => null, 'created_at' => '2021-12-18 12:04:40', 'updated_at' => '2021-12-18 12:04:40'],
            ['id' => 18, 'slug' => 'french', 'attribute_id' => 5, 'value' => 'French', 'language' => 'en', 'meta' => null, 'created_at' => '2021-12-18 12:04:40', 'updated_at' => '2021-12-18 12:04:40'],
            ['id' => 19, 'slug' => 'hindi', 'attribute_id' => 5, 'value' => 'Hindi', 'language' => 'en', 'meta' => null, 'created_at' => '2021-12-18 12:04:40', 'updated_at' => '2021-12-18 12:04:40'],
            ['id' => 20, 'slug' => 'hebrew', 'attribute_id' => 5, 'value' => 'Hebrew', 'language' => 'en', 'meta' => null, 'created_at' => '2021-12-18 12:04:40', 'updated_at' => '2021-12-18 12:04:40'],
            ['id' => 21, 'slug' => 'hardcover-book', 'attribute_id' => 6, 'value' => 'Hardcover Book', 'language' => 'en', 'meta' => null, 'created_at' => '2021-12-18 12:11:47', 'updated_at' => '2021-12-18 12:11:47'],
            ['id' => 22, 'slug' => 'picture-book', 'attribute_id' => 6, 'value' => 'Picture Book', 'language' => 'en', 'meta' => null, 'created_at' => '2021-12-18 12:11:47', 'updated_at' => '2021-12-18 12:11:47'],
            ['id' => 23, 'slug' => 'paperback-book', 'attribute_id' => 6, 'value' => 'Paperback Book', 'language' => 'en', 'meta' => null, 'created_at' => '2021-12-18 12:11:47', 'updated_at' => '2021-12-18 12:11:47'],
            ['id' => 24, 'slug' => 'pdf-book', 'attribute_id' => 6, 'value' => 'PDF Book', 'language' => 'en', 'meta' => null, 'created_at' => '2021-12-18 12:11:47', 'updated_at' => '2021-12-18 12:12:50'],
        ];

        DB::table('attribute_values')->insert($attributeValues);
    }
}