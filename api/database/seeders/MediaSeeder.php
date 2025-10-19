<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    public function run()
    {
        $media = [
            [
                'id' => 1,
                'model_type' => 'Marvel\\Database\\Models\\Attachment',
                'model_id' => 1,
                'uuid' => 'a2283ef0-0ee1-47a1-ad4a-15c585f7a1ee',
                'collection_name' => 'default',
                'name' => 'Apples',
                'file_name' => 'Apples.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 's3',
                'conversions_disk' => 's3',
                'size' => 18171,
                'manipulations' => '[]',
                'generated_conversions' => '{"thumbnail": true}',
                'custom_properties' => '[]',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2021-03-08 10:23:03',
                'updated_at' => '2021-03-08 10:23:03'
            ],
            [
                'id' => 2,
                'model_type' => 'Marvel\\Database\\Models\\Attachment',
                'model_id' => 2,
                'uuid' => 'f7b1ae0e-0024-42e3-abef-c20a2aad7d67',
                'collection_name' => 'default',
                'name' => 'BabySpinach',
                'file_name' => 'BabySpinach.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 's3',
                'conversions_disk' => 's3',
                'size' => 13104,
                'manipulations' => '[]',
                'generated_conversions' => '{"thumbnail": true}',
                'custom_properties' => '[]',
                'responsive_images' => '[]',
                'order_column' => 2,
                'created_at' => '2021-03-08 10:25:05',
                'updated_at' => '2021-03-08 10:25:05'
            ],
            [
                'id' => 3,
                'model_type' => 'Marvel\\Database\\Models\\Attachment',
                'model_id' => 3,
                'uuid' => '74feebbb-5e2f-4ac0-b622-539568c96343',
                'collection_name' => 'default',
                'name' => 'blueberries',
                'file_name' => 'blueberries.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 's3',
                'conversions_disk' => 's3',
                'size' => 14714,
                'manipulations' => '[]',
                'generated_conversions' => '{"thumbnail": true}',
                'custom_properties' => '[]',
                'responsive_images' => '[]',
                'order_column' => 3,
                'created_at' => '2021-03-08 10:39:13',
                'updated_at' => '2021-03-08 10:39:13'
            ]
        ];

        DB::table('media')->insert($media);
    }
}