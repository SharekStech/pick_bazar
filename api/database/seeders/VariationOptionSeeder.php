<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariationOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('variation_options')->insert([
            [
                'id' => 157,
                'title' => 'Red/S',
                'image' => NULL,
                'price' => '30',
                'sale_price' => '20',
                'quantity' => 100,
                'is_disable' => 0,
                'sku' => '10010',
                'options' => '[{"name": "Color", "value": "Red"}, {"name": "Size", "value": "S"}]',
                'product_id' => 173,
                'created_at' => '2021-05-09 17:47:03',
                'updated_at' => '2021-05-09 17:47:03',
                'is_digital' => 0,
            ],
            [
                'id' => 158,
                'title' => 'Red/M',
                'image' => NULL,
                'price' => '30',
                'sale_price' => '20',
                'quantity' => 200,
                'is_disable' => 0,
                'sku' => '10011',
                'options' => '[{"name": "Color", "value": "Red"}, {"name": "Size", "value": "M"}]',
                'product_id' => 173,
                'created_at' => '2021-05-09 17:47:03',
                'updated_at' => '2021-05-09 17:47:03',
                'is_digital' => 0,
            ],
            [
                'id' => 159,
                'title' => 'Blue/S',
                'image' => NULL,
                'price' => '30',
                'sale_price' => '20',
                'quantity' => 200,
                'is_disable' => 0,
                'sku' => '10012',
                'options' => '[{"name": "Color", "value": "Blue"}, {"name": "Size", "value": "S"}]',
                'product_id' => 173,
                'created_at' => '2021-05-09 17:47:03',
                'updated_at' => '2021-05-09 17:47:03',
                'is_digital' => 0,
            ],
        ]);
    }
}
