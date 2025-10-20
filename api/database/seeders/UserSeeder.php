<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@demo.com',
                'password' => Hash::make('123456'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Super Admin',
                'email' => 'superadmin@demo.com',
                'password' => Hash::make('123456'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Store Owner', // Changed from Customer to Store Owner as per task. Role assignment typically handled separately.
                'email' => 'store@demo.com', // Updated email for consistency
                'password' => Hash::make('123456'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Customer 2',
                'email' => 'customer2@demo.com',
                'password' => Hash::make('123456'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Customer 3',
                'email' => 'customer3@demo.com',
                'password' => Hash::make('123456'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

