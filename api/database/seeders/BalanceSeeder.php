<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BalanceSeeder extends Seeder
{
    public function run()
    {
        $balances = [
            [
                'id' => 1,
                'shop_id' => 1,
                'admin_commission_rate' => 10,
                'total_earnings' => 0,
                'withdrawn_amount' => 0,
                'current_balance' => 0,
                'payment_info' => '{"bank": "Bank1", "name": "furniture shop", "email": "furniture@demo.com", "account": 1121213131414141}',
                'created_at' => '2021-06-27 08:54:32',
                'updated_at' => '2021-06-30 14:14:40'
            ],
            [
                'id' => 4,
                'shop_id' => 6,
                'admin_commission_rate' => 10,
                'total_earnings' => 0,
                'withdrawn_amount' => 0,
                'current_balance' => 0,
                'payment_info' => '{"bank": "Bank6", "name": "Grocery Shop", "email": "grocery@demo.com", "account": 231321635465465}',
                'created_at' => '2021-06-28 03:48:49',
                'updated_at' => '2021-12-07 11:53:18'
            ],
            [
                'id' => 5,
                'shop_id' => 5,
                'admin_commission_rate' => 10,
                'total_earnings' => 0,
                'withdrawn_amount' => 0,
                'current_balance' => 0,
                'payment_info' => '{"bank": "Bank5", "name": "Bakery Shop", "email": "bakery@demo.com", "account": 86453213548641330}',
                'created_at' => '2021-06-28 03:49:25',
                'updated_at' => '2021-06-30 14:23:05'
            ],
            [
                'id' => 6,
                'shop_id' => 4,
                'admin_commission_rate' => 10,
                'total_earnings' => 0,
                'withdrawn_amount' => 0,
                'current_balance' => 0,
                'payment_info' => '{"bank": "Bank4", "name": "Makeup Shop", "email": "makeup@demo.com", "account": 5.6210303648761e18}',
                'created_at' => '2021-06-28 03:49:56',
                'updated_at' => '2021-06-30 14:17:44'
            ],
            [
                'id' => 7,
                'shop_id' => 3,
                'admin_commission_rate' => 10,
                'total_earnings' => 0,
                'withdrawn_amount' => 0,
                'current_balance' => 0,
                'payment_info' => '{"bank": "Bank3", "name": "Bag Shop", "email": "bag@demo.com", "account": 632145987000364}',
                'created_at' => '2021-06-28 03:50:00',
                'updated_at' => '2021-06-30 14:23:46'
            ],
            [
                'id' => 8,
                'shop_id' => 2,
                'admin_commission_rate' => 10,
                'total_earnings' => 0,
                'withdrawn_amount' => 0,
                'current_balance' => 0,
                'payment_info' => '{"bank": "Bank2", "name": "Clothing Shop", "email": "clothing@demo.com", "account": 1236521002454}',
                'created_at' => '2021-06-28 03:50:04',
                'updated_at' => '2021-06-30 14:19:31'
            ],
            [
                'id' => 9,
                'shop_id' => 7,
                'admin_commission_rate' => 10,
                'total_earnings' => 0,
                'withdrawn_amount' => 0,
                'current_balance' => 0,
                'payment_info' => '{"bank": "book bank", "name": "book shop", "email": "admin@example.com", "account": 123456789}',
                'created_at' => '2021-12-07 16:47:07',
                'updated_at' => '2021-12-16 16:42:14'
            ]
        ];

        DB::table('balances')->insert($balances);
    }
}