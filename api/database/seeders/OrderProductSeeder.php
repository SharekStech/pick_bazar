<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderProductSeeder extends Seeder
{
    public function run()
    {
        $orderProducts = [
            [
                'id' => 5,
                'order_id' => 5,
                'product_id' => 888,
                'variation_option_id' => null,
                'order_quantity' => 3,
                'unit_price' => 100,
                'subtotal' => 300,
                'deleted_at' => null,
                'created_at' => '2023-04-09 22:11:26',
                'updated_at' => '2023-04-09 22:11:26'
            ],
            [
                'id' => 6,
                'order_id' => 6,
                'product_id' => 888,
                'variation_option_id' => null,
                'order_quantity' => 3,
                'unit_price' => 100,
                'subtotal' => 300,
                'deleted_at' => null,
                'created_at' => '2023-04-09 22:11:26',
                'updated_at' => '2023-04-09 22:11:26'
            ],
            [
                'id' => 9,
                'order_id' => 9,
                'product_id' => 892,
                'variation_option_id' => 384,
                'order_quantity' => 1,
                'unit_price' => 225,
                'subtotal' => 225,
                'deleted_at' => null,
                'created_at' => '2023-04-09 22:13:19',
                'updated_at' => '2023-04-09 22:13:19'
            ]
        ];

        DB::table('order_product')->insert($orderProducts);
    }
}