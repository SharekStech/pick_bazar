<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaxSeeder extends Seeder
{
    public function run()
    {
        $tax = [
            'id' => 1,
            'zip' => null,
            'city' => null,
            'state' => null,
            'country' => null,
            'rate' => 2,
            'name' => 'Global',
            'is_global' => null,
            'priority' => null,
            'on_shipping' => 1,
            'created_at' => '2021-03-25 13:26:57',
            'updated_at' => '2021-03-25 16:07:18'
        ];

        DB::table('tax_classes')->insert($tax);
    }
};