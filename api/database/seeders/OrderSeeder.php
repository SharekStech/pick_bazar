<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $orders = [
            [
                'id' => 5,
                'tracking_number' => '20230410485740',
                'customer_id' => 2,
                'customer_contact' => '19365141641631',
                'customer_name' => 'Customer',
                'amount' => 300,
                'sales_tax' => 6,
                'paid_total' => 306,
                'total' => 306,
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
                'created_at' => '2023-04-09 22:11:26',
                'updated_at' => '2023-04-09 22:16:41'
            ],
            [
                'id' => 9,
                'tracking_number' => '20230410230333',
                'customer_id' => 2,
                'customer_contact' => '19365141641631',
                'customer_name' => 'Customer',
                'amount' => 225,
                'sales_tax' => 4.5,
                'paid_total' => 229.5,
                'total' => 229.5,
                'cancelled_amount' => 0.00,
                'language' => 'en',
                'coupon_id' => null,
                'parent_id' => null,
                'shop_id' => null,
                'discount' => 0,
                'payment_gateway' => 'CASH_ON_DELIVERY',
                'shipping_address' => '{"zip":"40391","city":"Winchester","state":"KY","country":"United States","street_address":"2148  Straford Park"}',
                'billing_address' => '{"zip":"99614","city":"Kipnuk","state":"AK","country":"United States","street_address":"2231 Kidd Avenue"}',
                'logistics_provider' => null,
                'delivery_fee' => 0,
                'delivery_time' => 'Express Delivery',
                'order_status' => 'order-completed',
                'payment_status' => 'payment-cash-on-delivery',
                'deleted_at' => null,
                'created_at' => '2023-04-09 22:13:19',
                'updated_at' => '2023-04-09 22:16:53'
            ]
        ];

        DB::table('orders')->insert($orders);
    }
}