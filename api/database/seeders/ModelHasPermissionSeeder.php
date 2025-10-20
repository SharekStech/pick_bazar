<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelHasPermissionSeeder extends Seeder
{
    public function run()
    {
        $modelHasPermissions = [
            [
                'permission_id' => 1, // super_admin permission ID
                'model_type' => 'Marvel\\Database\\Models\\User',
                'model_id' => 1, // Admin user ID
            ],
            [
                'permission_id' => 2, // customer permission ID
                'model_type' => 'Marvel\\Database\\Models\\User',
                'model_id' => 2, // Customer user ID
            ],
            [
                'permission_id' => 1, // super_admin permission ID
                'model_type' => 'Marvel\\Database\\Models\\User',
                'model_id' => 3, // Super Admin user ID
            ],
        ];

        DB::table('model_has_permissions')->insert($modelHasPermissions);
    }
}
