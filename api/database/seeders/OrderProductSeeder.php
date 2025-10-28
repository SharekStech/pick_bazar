<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderProductSeeder extends Seeder
{
    public function run()
    {
        $productIds = DB::table('products')->pluck('id')->toArray();
        $orderIds = DB::table('orders')->pluck('id')->toArray();

        $orderProducts = [];
        for ($i = 0; $i < 30; $i++) {
            $orderProducts[] = [
                'order_id' => $orderIds[array_rand($orderIds)],
                'product_id' => $productIds[array_rand($productIds)],
                'variation_option_id' => null,
                'order_quantity' => rand(1, 5),
                'unit_price' => rand(50, 500),
                'subtotal' => rand(50, 2500),
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        DB::table('order_product')->insert($orderProducts);
    }
}
