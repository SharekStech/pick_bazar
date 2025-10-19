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
                'permission_id' => 2,
                'model_type' => 'Marvel\\Database\\Models\\User',
                'model_id' => 1,
            ],
            [
                'permission_id' => 2,
                'model_type' => 'Marvel\\Database\\Models\\User',
                'model_id' => 2,
            ],
            [
                'permission_id' => 3,
                'model_type' => 'Marvel\\Database\\Models\\User',
                'model_id' => 1,
            ],
        ];

        DB::table('model_has_permissions')->insert($modelHasPermissions);
    }
}