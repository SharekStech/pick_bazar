<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariationSeeder extends Seeder
{
    public function run()
    {
        $variations = [
            [
                'id' => 157,
                'title' => 'Red/S',
                'image' => null,
                'price' => 30,
                'sale_price' => 20,
                'quantity' => 100,
                'is_disable' => false,
                'sku' => '10010',
                'options' => json_encode([['name' => 'Color', 'value' => 'Red'], ['name' => 'Size', 'value' => 'S']]),
                'product_id' => 173,
                'is_digital' => false,
                'created_at' => '2021-05-09 17:47:03',
                'updated_at' => '2021-05-09 17:47:03'
            ],
            [
                'id' => 158,
                'title' => 'Red/M',
                'image' => null,
                'price' => 30,
                'sale_price' => 20,
                'quantity' => 200,
                'is_disable' => false,
                'sku' => '10011',
                'options' => json_encode([['name' => 'Color', 'value' => 'Red'], ['name' => 'Size', 'value' => 'M']]),
                'product_id' => 173,
                'is_digital' => false,
                'created_at' => '2021-05-09 17:47:03',
                'updated_at' => '2021-05-09 17:47:03'
            ],
            [
                'id' => 159,
                'title' => 'Blue/S',
                'image' => null,
                'price' => 30,
                'sale_price' => 20,
                'quantity' => 200,
                'is_disable' => false,
                'sku' => '10012',
                'options' => json_encode([['name' => 'Color', 'value' => 'Blue'], ['name' => 'Size', 'value' => 'S']]),
                'product_id' => 173,
                'is_digital' => false,
                'created_at' => '2021-05-09 17:47:03',
                'updated_at' => '2021-05-09 17:47:03'
            ],
            [
                'id' => 308,
                'title' => 'Hardcover Book/English',
                'image' => null,
                'price' => 200,
                'sale_price' => 180,
                'quantity' => 500,
                'is_disable' => false,
                'sku' => '51dg65sdf1g65g4s89sb65b',
                'options' => json_encode([['name' => 'Book Type', 'value' => 'Hardcover Book'], ['name' => 'Language', 'value' => 'English']]),
                'product_id' => 946,
                'is_digital' => false,
                'created_at' => '2021-12-18 12:14:05',
                'updated_at' => '2021-12-18 12:14:05'
            ],
            [
                'id' => 312,
                'title' => 'Hardcover Book/English',
                'image' => null,
                'price' => 300,
                'sale_price' => null,
                'quantity' => 500,
                'is_disable' => false,
                'sku' => '65g1sdf658g48sfd4b6s51+++500',
                'options' => json_encode([['name' => 'Book Type', 'value' => 'Hardcover Book'], ['name' => 'Language', 'value' => 'English']]),
                'product_id' => 943,
                'is_digital' => true,
                'created_at' => '2021-12-18 12:20:49',
                'updated_at' => '2021-12-18 12:20:49'
            ]
        ];

        DB::table('variation_options')->insert($variations);
    }
};