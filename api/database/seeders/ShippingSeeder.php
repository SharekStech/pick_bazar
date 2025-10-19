<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingSeeder extends Seeder
{
    public function run()
    {
        $shipping = [
            'id' => 1,
            'name' => 'Global',
            'amount' => 50,
            'global' => '1',
            'type' => 'fixed',
            'created_at' => '2021-03-25 13:27:49',
            'updated_at' => '2021-03-25 13:27:49'
        ];

        DB::table('shipping_classes')->insert($shipping);
    }
};