<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $orders = [];
        for ($i = 1; $i <= 30; $i++) {
            $orders[] = [
                'tracking_number' => (string) (time() + $i),
                'customer_id' => 2,
                'customer_contact' => '19365141641631',
                'customer_name' => 'Customer',
                'amount' => rand(100, 1000),
                'sales_tax' => rand(5, 50),
                'paid_total' => rand(100, 1000),
                'total' => rand(100, 1000),
                'cancelled_amount' => 0.00,
                'language' => 'en',
                'coupon_id' => null,
                'parent_id' => null,
                'shop_id' => null,
                'discount' => 0,
                'payment_gateway' => 'CASH_ON_DELIVERY',
                'shipping_address' => '[]',
                'billing_address' => '[]',
                'logistics_provider' => null,
                'delivery_fee' => 0,
                'delivery_time' => null,
                'order_status' => 'order-completed',
                'payment_status' => 'payment-cash-on-delivery',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        DB::table('orders')->insert($orders);
    }
}
