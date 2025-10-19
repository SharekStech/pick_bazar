<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufacturerSeeder extends Seeder
{
    public function run()
    {
        $manufacturers = [
            [
                'id' => 1,
                'name' => 'Too cool publication',
                'is_approved' => 1,
                'image' => '{"id": 1410, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1410/Publisher-logo-2.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1410/conversions/Publisher-logo-2-thumbnail.jpg"}',
                'cover_image' => '{"id": 1388, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1388/Publisher-banner-2.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1388/conversions/Publisher-banner-2-thumbnail.jpg"}',
                'slug' => 'too-cool-publication',
                'type_id' => 8,
                'description' => 'To publish is to make content available to the generalpublic.While specific use of the term may vary among countries, it\'s generally applied to textbook, images, or other audio-visual content, including paper ( journals, magazines, registers,etc.). The word publication means the act of publishing, and also any published clones issued for public distribution.',
                'website' => 'https://redq.io/',
                'socials' => '[{"url": "https://www.facebook.com/redqinc/", "icon": "FacebookIcon"}, {"url": "https://www.instagram.com/redqinc/", "icon": "InstagramIcon"}, {"url": "https://www.youtube.com/channel/UCjld1tyVHRNy_pe3ROLiLhw", "icon": "YouTubeIcon"}]',
                'created_at' => '2021-12-07 16:42:04',
                'updated_at' => '2021-12-14 14:53:02'
            ],
            [
                'id' => 2,
                'name' => 'Jeremy Publications',
                'is_approved' => 1,
                'image' => '{"id": 1409, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1409/Publisher-logo-1.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1409/conversions/Publisher-logo-1-thumbnail.jpg"}',
                'cover_image' => '{"id": 1386, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1386/Publisher-banner-1.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1386/conversions/Publisher-banner-1-thumbnail.jpg"}',
                'slug' => 'jeremy-publications',
                'type_id' => 8,
                'description' => 'To publish is to make content available to the generalpublic.While specific use of the term may vary among countries, it\'s generally applied to textbook, images, or other audio-visual content, including paper ( journals, magazines, registers,etc.). The word publication means the act of publishing, and also any published clones issued for public distribution.',
                'website' => 'https://redq.io/',
                'socials' => '[{"url": "https://www.facebook.com/redqinc/", "icon": "FacebookIcon"}, {"url": "https://www.instagram.com/redqinc/", "icon": "InstagramIcon"}, {"url": "https://www.youtube.com/channel/UCjld1tyVHRNy_pe3ROLiLhw", "icon": "YouTubeIcon"}]',
                'created_at' => '2021-12-07 16:42:38',
                'updated_at' => '2021-12-14 14:52:47'
            ],
            [
                'id' => 3,
                'name' => 'Wonder Publications',
                'is_approved' => 1,
                'image' => '{"id": 1408, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1408/Publisher-logo-3.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1408/conversions/Publisher-logo-3-thumbnail.jpg"}',
                'cover_image' => '{"id": 1390, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1390/Publisher-banner-3.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1390/conversions/Publisher-banner-3-thumbnail.jpg"}',
                'slug' => 'wonder-publications',
                'type_id' => 8,
                'description' => 'To publish is to make content available to the generalpublic.While specific use of the term may vary among countries, it\'s generally applied to textbook, images, or other audio-visual content, including paper ( journals, magazines, registers,etc.). The word publication means the act of publishing, and also any published clones issued for public distribution.',
                'website' => null,
                'socials' => '[{"url": "https://www.facebook.com/redqinc/", "icon": "FacebookIcon"}, {"url": "https://www.instagram.com/redqinc/", "icon": "InstagramIcon"}, {"url": "https://www.youtube.com/channel/UCjld1tyVHRNy_pe3ROLiLhw", "icon": "YouTubeIcon"}]',
                'created_at' => '2021-12-08 14:22:49',
                'updated_at' => '2021-12-14 14:52:33'
            ],
            [
                'id' => 4,
                'name' => 'Super Publication',
                'is_approved' => 1,
                'image' => '{"id": 1407, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1407/Publisher-logo-4.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1407/conversions/Publisher-logo-4-thumbnail.jpg"}',
                'cover_image' => '{"id": 1392, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1392/Publisher-banner-4.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1392/conversions/Publisher-banner-4-thumbnail.jpg"}',
                'slug' => 'super-publication',
                'type_id' => 8,
                'description' => 'To publish is to make content available to the generalpublic.While specific use of the term may vary among countries, it\'s generally applied to textbook, images, or other audio-visual content, including paper ( journals, magazines, registers,etc.). The word publication means the act of publishing, and also any published clones issued for public distribution.',
                'website' => null,
                'socials' => '[]',
                'created_at' => '2021-12-08 14:23:14',
                'updated_at' => '2021-12-09 07:27:47'
            ],
            [
                'id' => 5,
                'name' => 'Poppy Publication',
                'is_approved' => 1,
                'image' => '{"id": 1406, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1406/Publisher-logo-5.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1406/conversions/Publisher-logo-5-thumbnail.jpg"}',
                'cover_image' => '{"id": 1394, "original": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1394/Publisher-banner-5.png", "thumbnail": "https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1394/conversions/Publisher-banner-5-thumbnail.jpg"}',
                'slug' => 'poppy-publication',
                'type_id' => 8,
                'description' => 'To publish is to make content available to the generalpublic.While specific use of the term may vary among countries, it\'s generally applied to textbook, images, or other audio-visual content, including paper ( journals, magazines, registers,etc.). The word publication means the act of publishing, and also any published clones issued for public distribution.',
                'website' => null,
                'socials' => '[{"url": "https://www.youtube.com/channel/UCjld1tyVHRNy_pe3ROLiLhw", "icon": "YouTubeIcon"}, {"url": "https://www.instagram.com/redqinc/", "icon": "InstagramIcon"}, {"url": "https://www.facebook.com/redqinc/", "icon": "FacebookIcon"}]',
                'created_at' => '2021-12-08 14:23:36',
                'updated_at' => '2021-12-14 14:51:34'
            ]
        ];

        DB::table('manufacturers')->insert($manufacturers);
    }
}