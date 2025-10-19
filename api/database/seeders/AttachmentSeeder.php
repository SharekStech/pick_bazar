<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attachments')->insert([
            ['id' => 1, 'url' => '', 'created_at' => '2021-03-08 10:23:03', 'updated_at' => '2021-03-08 10:23:03'],
            ['id' => 2, 'url' => '', 'created_at' => '2021-03-08 10:25:05', 'updated_at' => '2021-03-08 10:25:05'],
            ['id' => 3, 'url' => '', 'created_at' => '2021-03-08 10:39:13', 'updated_at' => '2021-03-08 10:39:13'],
            ['id' => 4, 'url' => '', 'created_at' => '2021-03-08 10:40:40', 'updated_at' => '2021-03-08 10:40:40'],
            ['id' => 5, 'url' => '', 'created_at' => '2021-03-08 10:43:23', 'updated_at' => '2021-03-08 10:43:23'],
            ['id' => 6, 'url' => '', 'created_at' => '2021-03-08 10:44:24', 'updated_at' => '2021-03-08 10:44:24'],
        ]);
    }
}