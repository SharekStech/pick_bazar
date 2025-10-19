<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id' => 1,
                'name' => 'super_admin',
                'guard_name' => 'api',
                'created_at' => '2021-06-27 04:13:00',
                'updated_at' => '2021-06-27 04:13:00'
            ],
            [
                'id' => 2,
                'name' => 'customer',
                'guard_name' => 'api',
                'created_at' => '2021-06-27 04:13:00',
                'updated_at' => '2021-06-27 04:13:00'
            ],
            [
                'id' => 3,
                'name' => 'store_owner',
                'guard_name' => 'api',
                'created_at' => '2021-06-27 04:13:00',
                'updated_at' => '2021-06-27 04:13:00'
            ],
            [
                'id' => 4,
                'name' => 'staff',
                'guard_name' => 'api',
                'created_at' => '2021-06-27 04:13:00',
                'updated_at' => '2021-06-27 04:13:00'
            ]
        ];

        DB::table('permissions')->insert($permissions);
    }
}