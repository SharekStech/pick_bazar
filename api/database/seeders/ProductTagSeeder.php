<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTagSeeder extends Seeder
{
    public function run()
    {
        $productTags = [
            ['id' => 1, 'product_id' => 888, 'tag_id' => 17],
            ['id' => 2, 'product_id' => 888, 'tag_id' => 16],
            ['id' => 3, 'product_id' => 888, 'tag_id' => 2],
            ['id' => 4, 'product_id' => 883, 'tag_id' => 25],
            ['id' => 5, 'product_id' => 883, 'tag_id' => 20],
            ['id' => 6, 'product_id' => 884, 'tag_id' => 4],
            ['id' => 7, 'product_id' => 884, 'tag_id' => 25],
            ['id' => 8, 'product_id' => 884, 'tag_id' => 20],
            ['id' => 9, 'product_id' => 885, 'tag_id' => 5],
            ['id' => 10, 'product_id' => 885, 'tag_id' => 24]
        ];

        DB::table('product_tag')->insert($productTags);
    }
}