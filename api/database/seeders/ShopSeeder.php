<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    public function run()
    {
        $shops = [
            [
                'id' => 1,
                'owner_id' => 1,
                'name' => 'Furniture Shop',
                'slug' => 'furniture-shop',
                'description' => 'The furniture shop is the best shop around the city. This is being run under the store owner and our aim is to provide quality product and hassle free customer service.',
                'cover_image' => json_encode(['id' => '885', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/883/Untitled-6.jpg', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/883/conversions/Untitled-6-thumbnail.jpg']),
                'logo' => json_encode(['id' => '884', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/882/Furniture.png', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/882/conversions/Furniture-thumbnail.jpg']),
                'is_active' => true,
                'address' => json_encode(['zip' => '08753', 'city' => 'East Dover', 'state' => 'New Jersey', 'country' => 'USA', 'street_address' => '588  Finwood Road']),
                'settings' => json_encode(['contact' => '21342121221', 'socials' => [['url' => 'https://www.instagram.com/', 'icon' => 'InstagramIcon']], 'website' => 'https://redq.io/', 'location' => ['lat' => 40.757272, 'lng' => -74.089508, 'city' => 'Kearny', 'state' => 'NJ', 'country' => 'United States', 'formattedAddress' => 'New Jersey Turnpike, Kearny, NJ, USA']]),
                'created_at' => '2021-06-27 03:46:14',
                'updated_at' => '2021-07-08 09:27:14'
            ],
            [
                'id' => 2,
                'owner_id' => 1,
                'name' => 'Clothing Shop',
                'slug' => 'clothing-shop',
                'description' => 'The clothing shop is the best shop around the city. This is being run under the store owner and our aim is to provide quality product and hassle free customer service.',
                'cover_image' => json_encode(['id' => '886', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/884/Untitled-4.jpg', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/884/conversions/Untitled-4-thumbnail.jpg']),
                'logo' => json_encode(['id' => '896', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/894/fashion.png', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/894/conversions/fashion-thumbnail.jpg']),
                'is_active' => true,
                'address' => json_encode(['zip' => '62656', 'city' => 'Lincoln', 'state' => 'Illinois', 'country' => 'USA', 'street_address' => '4885  Spring Street']),
                'settings' => json_encode(['contact' => '212901921221', 'socials' => [['url' => 'https://www.facebook.com/', 'icon' => 'FacebookIcon']], 'website' => 'https://redq.io/', 'location' => ['lat' => 40.1576691, 'lng' => -89.38529779999999, 'city' => 'Lincoln', 'state' => 'IL', 'country' => 'United States', 'formattedAddress' => 'IL-121, Lincoln, IL, USA']]),
                'created_at' => '2021-06-27 03:47:10',
                'updated_at' => '2021-07-08 09:26:24'
            ],
            [
                'id' => 6,
                'owner_id' => 1,
                'name' => 'Grocery Shop',
                'slug' => 'grocery-shop',
                'description' => 'The grocery shop is the best shop around the city. This is being run under the store owner and our aim is to provide fresh and quality product and hassle free customer service.',
                'cover_image' => json_encode(['id' => '894', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/892/Untitled-2.jpg', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/892/conversions/Untitled-2-thumbnail.jpg']),
                'logo' => json_encode(['id' => '893', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/891/Group-36321.png', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/891/conversions/Group-36321-thumbnail.jpg']),
                'is_active' => true,
                'address' => json_encode(['zip' => '61032', 'city' => 'Freeport', 'state' => 'Illinois', 'country' => 'USA', 'street_address' => '1986  Spinnaker Lane']),
                'settings' => json_encode(['contact' => '018927525111', 'socials' => [['url' => 'https://www.facebook.com/', 'icon' => 'FacebookIcon'], ['url' => 'https://www.instagram.com/', 'icon' => 'InstagramIcon'], ['url' => 'https://www.twitter.com/', 'icon' => 'TwitterIcon']], 'website' => 'https://redq.io/', 'location' => ['lat' => 38.9032325, 'lng' => -77.0211068, 'city' => 'Washington', 'state' => 'DC', 'country' => 'United States', 'formattedAddress' => 'New York Ave NW, Washington, DC, USA']]),
                'created_at' => '2021-06-27 03:48:23',
                'updated_at' => '2021-07-08 09:22:38'
            ],
            [
                'id' => 5,
                'owner_id' => 1,
                'name' => 'Bakery Shop',
                'slug' => 'bakery-shop',
                'description' => 'The bakery shop is the best shop around the city. This is being run under the store owner and our aim is to provide quality product and hassle free customer service.',
                'cover_image' => json_encode(['id' => '885', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/883/Untitled-6.jpg', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/883/conversions/Untitled-6-thumbnail.jpg']),
                'logo' => json_encode(['id' => '884', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/882/Furniture.png', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/882/conversions/Furniture-thumbnail.jpg']),
                'is_active' => true,
                'address' => json_encode(['zip' => '08753', 'city' => 'East Dover', 'state' => 'New Jersey', 'country' => 'USA', 'street_address' => '588  Finwood Road']),
                'settings' => json_encode(['contact' => '21342121221', 'socials' => [['url' => 'https://www.instagram.com/', 'icon' => 'InstagramIcon']], 'website' => 'https://redq.io/', 'location' => ['lat' => 40.757272, 'lng' => -74.089508, 'city' => 'Kearny', 'state' => 'NJ', 'country' => 'United States', 'formattedAddress' => 'New Jersey Turnpike, Kearny, NJ, USA']]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'owner_id' => 1,
                'name' => 'Makeup Shop',
                'slug' => 'makeup-shop',
                'description' => 'The makeup shop is the best shop around the city. This is being run under the store owner and our aim is to provide quality product and hassle free customer service.',
                'cover_image' => json_encode(['id' => '885', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/883/Untitled-6.jpg', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/883/conversions/Untitled-6-thumbnail.jpg']),
                'logo' => json_encode(['id' => '884', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/882/Furniture.png', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/882/conversions/Furniture-thumbnail.jpg']),
                'is_active' => true,
                'address' => json_encode(['zip' => '08753', 'city' => 'East Dover', 'state' => 'New Jersey', 'country' => 'USA', 'street_address' => '588  Finwood Road']),
                'settings' => json_encode(['contact' => '21342121221', 'socials' => [['url' => 'https://www.instagram.com/', 'icon' => 'InstagramIcon']], 'website' => 'https://redq.io/', 'location' => ['lat' => 40.757272, 'lng' => -74.089508, 'city' => 'Kearny', 'state' => 'NJ', 'country' => 'United States', 'formattedAddress' => 'New Jersey Turnpike, Kearny, NJ, USA']]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'owner_id' => 1,
                'name' => 'Bag Shop',
                'slug' => 'bag-shop',
                'description' => 'The bag shop is the best shop around the city. This is being run under the store owner and our aim is to provide quality product and hassle free customer service.',
                'cover_image' => json_encode(['id' => '885', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/883/Untitled-6.jpg', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/883/conversions/Untitled-6-thumbnail.jpg']),
                'logo' => json_encode(['id' => '884', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/882/Furniture.png', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/882/conversions/Furniture-thumbnail.jpg']),
                'is_active' => true,
                'address' => json_encode(['zip' => '08753', 'city' => 'East Dover', 'state' => 'New Jersey', 'country' => 'USA', 'street_address' => '588  Finwood Road']),
                'settings' => json_encode(['contact' => '21342121221', 'socials' => [['url' => 'https://www.instagram.com/', 'icon' => 'InstagramIcon']], 'website' => 'https://redq.io/', 'location' => ['lat' => 40.757272, 'lng' => -74.089508, 'city' => 'Kearny', 'state' => 'NJ', 'country' => 'United States', 'formattedAddress' => 'New Jersey Turnpike, Kearny, NJ, USA']]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 7,
                'owner_id' => 1,
                'name' => 'Book Shop',
                'slug' => 'book-shop',
                'description' => 'The book shop is the best shop around the city. This is being run under the store owner and our aim is to provide quality product and hassle free customer service.',
                'cover_image' => json_encode(['id' => '885', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/883/Untitled-6.jpg', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/883/conversions/Untitled-6-thumbnail.jpg']),
                'logo' => json_encode(['id' => '884', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/882/Furniture.png', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/882/conversions/Furniture-thumbnail.jpg']),
                'is_active' => true,
                'address' => json_encode(['zip' => '08753', 'city' => 'East Dover', 'state' => 'New Jersey', 'country' => 'USA', 'street_address' => '588  Finwood Road']),
                'settings' => json_encode(['contact' => '21342121221', 'socials' => [['url' => 'https://www.instagram.com/', 'icon' => 'InstagramIcon']], 'website' => 'https://redq.io/', 'location' => ['lat' => 40.757272, 'lng' => -74.089508, 'city' => 'Kearny', 'state' => 'NJ', 'country' => 'United States', 'formattedAddress' => 'New Jersey Turnpike, Kearny, NJ, USA']]),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('shops')->insert($shops);
    }
};
