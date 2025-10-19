<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
{
    public function run()
    {
        $categoryProducts = [
            ['id' => 1, 'product_id' => 1, 'category_id' => 1],
            ['id' => 2, 'product_id' => 1, 'category_id' => 2],
            ['id' => 3, 'product_id' => 2, 'category_id' => 1],
            ['id' => 4, 'product_id' => 2, 'category_id' => 3],
            ['id' => 5, 'product_id' => 3, 'category_id' => 1],
            ['id' => 6, 'product_id' => 3, 'category_id' => 2],
            ['id' => 7, 'product_id' => 4, 'category_id' => 1],
            ['id' => 8, 'product_id' => 4, 'category_id' => 3],
            ['id' => 9, 'product_id' => 5, 'category_id' => 3],
            ['id' => 10, 'product_id' => 6, 'category_id' => 1],
            ['id' => 40, 'product_id' => 21, 'category_id' => 50],
            ['id' => 41, 'product_id' => 21, 'category_id' => 51],
            ['id' => 84, 'product_id' => 43, 'category_id' => 54],
            ['id' => 85, 'product_id' => 43, 'category_id' => 55],
            ['id' => 128, 'product_id' => 65, 'category_id' => 58],
            ['id' => 129, 'product_id' => 65, 'category_id' => 60],
            ['id' => 184, 'product_id' => 102, 'category_id' => 84],
            ['id' => 192, 'product_id' => 110, 'category_id' => 68],
            ['id' => 193, 'product_id' => 110, 'category_id' => 69],
            ['id' => 781, 'product_id' => 412, 'category_id' => 101],
            ['id' => 782, 'product_id' => 412, 'category_id' => 102],
            ['id' => 891, 'product_id' => 467, 'category_id' => 89],
            ['id' => 1676, 'product_id' => 888, 'category_id' => 174],
            ['id' => 1684, 'product_id' => 891, 'category_id' => 175],
            ['id' => 1692, 'product_id' => 899, 'category_id' => 176]
        ];

        DB::table('category_product')->insert($categoryProducts);
    }
}