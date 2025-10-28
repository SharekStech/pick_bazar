<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['id' => 1, 'name' => 'Medicine', 'slug' => 'medicine', 'language' => 'en','icon' => 'null', 'image' => json_encode([]), 'details' => null, 'parent' => null, 'type_id' => 5, 'created_at' => '2021-03-08 07:21:31', 'updated_at' => '2021-03-08 07:21:31', 'deleted_at' => null],
            ['id' => 2, 'name' => 'Fruits', 'slug' => 'fruits', 'icon' => null, 'language' => 'en','image' => json_encode([]), 'details' => null, 'parent' => 1, 'type_id' => 1, 'created_at' => '2021-03-08 07:22:04', 'updated_at' => '2021-03-08 07:22:04', 'deleted_at' => null],
            ['id' => 3, 'name' => 'Vegetables', 'slug' => 'vegetables', 'language' => 'en','icon' => null, 'image' => '{"id": null, "original": null, "thumbnail": null}', 'details' => null, 'parent' => 1, 'type_id' => 1, 'created_at' => '2021-03-08 07:57:48', 'updated_at' => '2021-03-09 11:51:24', 'deleted_at' => null],
            ['id' => 4, 'name' => 'Meat & Fish', 'slug' => 'meat-fish', 'language' => 'en','icon' => 'MeatFish', 'image' => json_encode([]), 'details' => null, 'parent' => null, 'type_id' => 1, 'created_at' => '2021-03-08 08:54:16', 'updated_at' => '2021-03-08 08:54:16', 'deleted_at' => null],
            ['id' => 5, 'name' => 'Fresh Fish', 'slug' => 'fresh-fish', 'language' => 'en','icon' => null, 'image' => json_encode([]), 'details' => null, 'parent' => 4, 'type_id' => 1, 'created_at' => '2021-03-08 08:54:47', 'updated_at' => '2021-03-08 08:54:47', 'deleted_at' => null],
            ['id' => 6, 'name' => 'Meat', 'slug' => 'meat','language' => 'en', 'icon' => null, 'image' => json_encode([]), 'details' => null, 'parent' => 4, 'type_id' => 1, 'created_at' => '2021-03-08 08:55:14', 'updated_at' => '2021-03-08 08:55:14', 'deleted_at' => null],
            ['id' => 7, 'name' => 'Snacks', 'slug' => 'snacks', 'language' => 'en','icon' => 'Snacks', 'image' => json_encode([]), 'details' => null, 'parent' => null, 'type_id' => 1, 'created_at' => '2021-03-08 08:55:56', 'updated_at' => '2021-03-08 08:55:56', 'deleted_at' => null],
            ['id' => 8, 'name' => 'Nuts & Biscuits', 'slug' => 'nuts-biscuits','language' => 'en', 'icon' => null, 'image' => json_encode([]), 'details' => null, 'parent' => 7, 'type_id' => 1, 'created_at' => '2021-03-08 08:57:28', 'updated_at' => '2021-03-08 08:57:28', 'deleted_at' => null],
            ['id' => 9, 'name' => 'Chocolates', 'slug' => 'chocolates', 'language' => 'en','icon' => null, 'image' => json_encode([]), 'details' => null, 'parent' => 7, 'type_id' => 1, 'created_at' => '2021-03-08 08:58:44', 'updated_at' => '2021-03-08 08:58:44', 'deleted_at' => null],
            ['id' => 10, 'name' => 'Crisps', 'slug' => 'crisps', 'language' => 'en','icon' => null, 'image' => json_encode([]), 'details' => null, 'parent' => 7, 'type_id' => 1, 'created_at' => '2021-03-08 08:59:05', 'updated_at' => '2021-03-08 08:59:05', 'deleted_at' => null],
            ['id' => 50, 'name' => 'Face', 'slug' => 'face', 'language' => 'en','icon' => 'Face', 'image' => json_encode([]), 'details' => null, 'parent' => null, 'type_id' => 3, 'created_at' => '2021-03-09 05:45:12', 'updated_at' => '2021-03-09 05:45:12', 'deleted_at' => null],
            ['id' => 68, 'name' => 'Women Dress', 'slug' => 'women-dress', 'language' => 'en','icon' => 'WomenDress', 'image' => json_encode([]), 'details' => null, 'parent' => null, 'type_id' => 2, 'created_at' => '2021-03-09 06:25:14', 'updated_at' => '2021-03-09 06:25:14', 'deleted_at' => null],
            ['id' => 84, 'name' => 'Purse', 'slug' => 'purse','language' => 'en', 'icon' => 'Purse', 'image' => json_encode([]), 'details' => null, 'parent' => null, 'type_id' => 8, 'created_at' => '2021-03-09 09:49:20', 'updated_at' => '2021-03-09 09:49:20', 'deleted_at' => null],
            ['id' => 101, 'name' => 'Bed', 'slug' => 'bed', 'language' => 'en','icon' => 'Bed', 'image' => json_encode([]), 'details' => null, 'parent' => null, 'type_id' => 2, 'created_at' => '2021-03-13 14:43:22', 'updated_at' => '2021-03-13 14:43:22', 'deleted_at' => null],
            ['id' => 172, 'name' => 'Science Fiction', 'slug' => 'science-fiction-2','language' => 'en', 'icon' => null, 'image' => '{"id": 1378, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1378/Science-Fiction.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1378/conversions/Science-Fiction-thumbnail.jpg"}', 'details' => 'Science fabrication is a kidney of academic fabrication that generally deals with imaginative and futuristic generalities similar as advanced wisdom and technology, space disquisition, time trip, resemblant worlds, and extraterrestrial life.', 'parent' => null, 'type_id' => 8, 'created_at' => '2021-12-07 16:39:13', 'updated_at' => '2021-12-08 13:10:40', 'deleted_at' => null],
            ['id' => 176, 'name' => 'Category 176', 'slug' => 'category-176', 'language' => 'en','icon' => null, 'image' => json_encode([]), 'details' => null, 'parent' => null, 'type_id' => 1, 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => null            ],
            ['id' => 51, 'name' => 'Category 51', 'slug' => 'category-51', 'language' => 'en','icon' => null, 'image' => json_encode([]), 'details' => null, 'parent' => null, 'type_id' => 1, 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => null],
            ['id' => 54, 'name' => 'Category 54', 'slug' => 'category-54', 'language' => 'en','icon' => null, 'image' => json_encode([]), 'details' => null, 'parent' => null, 'type_id' => 1, 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => null],
            ['id' => 55, 'name' => 'Category 55', 'slug' => 'category-55', 'language' => 'en','icon' => null, 'image' => json_encode([]), 'details' => null, 'parent' => null, 'type_id' => 1, 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => null],
            ['id' => 58, 'name' => 'Category 58', 'slug' => 'category-58', 'language' => 'en','icon' => null, 'image' => json_encode([]), 'details' => null, 'parent' => null, 'type_id' => 1, 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => null],
            ['id' => 60, 'name' => 'Category 60', 'slug' => 'category-60', 'language' => 'en','icon' => null, 'image' => json_encode([]), 'details' => null, 'parent' => null, 'type_id' => 1, 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => null],
            ['id' => 69, 'name' => 'Category 69', 'slug' => 'category-69','language' => 'en', 'icon' => null, 'image' => json_encode([]), 'details' => null, 'parent' => null, 'type_id' => 1, 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => null],
            ['id' => 89, 'name' => 'Category 89', 'slug' => 'category-89', 'language' => 'en','icon' => null, 'image' => json_encode([]), 'details' => null, 'parent' => null, 'type_id' => 1, 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => null],
            ['id' => 102, 'name' => 'Category 102', 'slug' => 'category-102','language' => 'en', 'icon' => null, 'image' => json_encode([]), 'details' => null, 'parent' => null, 'type_id' => 1, 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => null],
            ['id' => 174, 'name' => 'Category 174', 'slug' => 'category-174','language' => 'en', 'icon' => null, 'image' => json_encode([]), 'details' => null, 'parent' => null, 'type_id' => 1, 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => null],
            ['id' => 175, 'name' => 'Category 175', 'slug' => 'category-175', 'language' => 'en','icon' => null, 'image' => json_encode([]), 'details' => null, 'parent' => null, 'type_id' => 1, 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => null]
        ];

        DB::table('categories')->insert($categories);
    }
}
