<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DigitalFileSeeder extends Seeder
{
    public function run()
    {
        $digitalFiles = [
            [
                'id' => 1,
                'attachment_id' => 1434,
                'url' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1434/DOCUMENTATION.pdf',
                'fileable_type' => 'Marvel\\Database\\Models\\Product',
                'fileable_id' => 886,
                'created_at' => '2021-12-07 16:54:19',
                'updated_at' => '2021-12-09 18:04:02'
            ],
            [
                'id' => 2,
                'attachment_id' => 1437,
                'url' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1437/DOCUMENTATION.pdf',
                'fileable_type' => 'Marvel\\Database\\Models\\Product',
                'fileable_id' => 888,
                'created_at' => '2021-12-09 07:38:05',
                'updated_at' => '2021-12-09 18:05:44'
            ],
            [
                'id' => 3,
                'attachment_id' => 1431,
                'url' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1431/DOCUMENTATION.pdf',
                'fileable_type' => 'Marvel\\Database\\Models\\Product',
                'fileable_id' => 883,
                'created_at' => '2021-12-09 17:50:11',
                'updated_at' => '2021-12-09 18:01:57'
            ],
            [
                'id' => 4,
                'attachment_id' => 1432,
                'url' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1432/DOCUMENTATION.pdf',
                'fileable_type' => 'Marvel\\Database\\Models\\Product',
                'fileable_id' => 884,
                'created_at' => '2021-12-09 18:02:40',
                'updated_at' => '2021-12-09 18:06:23'
            ],
            [
                'id' => 5,
                'attachment_id' => 1433,
                'url' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1433/DOCUMENTATION.pdf',
                'fileable_type' => 'Marvel\\Database\\Models\\Product',
                'fileable_id' => 885,
                'created_at' => '2021-12-09 18:03:10',
                'updated_at' => '2021-12-09 18:06:36'
            ],
            [
                'id' => 65,
                'attachment_id' => 1565,
                'url' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1565/DOCUMENTATION.pdf',
                'fileable_type' => 'Marvel\\Database\\Models\\Variation',
                'fileable_id' => 312,
                'created_at' => '2021-12-18 12:20:49',
                'updated_at' => '2021-12-18 12:20:49'
            ],
            [
                'id' => 66,
                'attachment_id' => 1566,
                'url' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1566/DOCUMENTATION.pdf',
                'fileable_type' => 'Marvel\\Database\\Models\\Variation',
                'fileable_id' => 313,
                'created_at' => '2021-12-18 12:20:49',
                'updated_at' => '2021-12-18 12:20:49'
            ],
            [
                'id' => 67,
                'attachment_id' => 1567,
                'url' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1567/DOCUMENTATION.pdf',
                'fileable_type' => 'Marvel\\Database\\Models\\Variation',
                'fileable_id' => 314,
                'created_at' => '2021-12-18 12:20:49',
                'updated_at' => '2021-12-18 12:20:49'
            ],
            [
                'id' => 68,
                'attachment_id' => 1568,
                'url' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1568/DOCUMENTATION.pdf',
                'fileable_type' => 'Marvel\\Database\\Models\\Variation',
                'fileable_id' => 315,
                'created_at' => '2021-12-18 12:20:49',
                'updated_at' => '2021-12-18 12:20:49'
            ],
            [
                'id' => 98,
                'attachment_id' => 1590,
                'url' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1590/DOCUMENTATION.pdf',
                'fileable_type' => 'Marvel\\Database\\Models\\Variation',
                'fileable_id' => 404,
                'created_at' => '2021-12-18 16:42:58',
                'updated_at' => '2021-12-18 16:42:58'
            ]
        ];

        DB::table('digital_files')->insert($digitalFiles);
    }
}