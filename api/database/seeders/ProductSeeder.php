<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Apples',
                'slug' => 'apples',
                'description' => 'An apple is a sweet, edible fruit produced by an apple tree (Malus domestica). Apple trees are ... The skin of ripe apples is generally red, yellow, green, pink, or russetted, though many bi- or tri-colored cultivars may be found.',
                'type_id' => 1,
                'price' => 2.00,
                'shop_id' => 6,
                'sale_price' => 1.60,
                'min_price' => 2.00,
                'max_price' => 2.00,
                'sku' => '1',
                'quantity' => 18,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1lb',
                'height' => null,
                'width' => null,
                'length' => null,
                'image' => json_encode(['id' => '1', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1/Apples.jpg', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/1/conversions/Apples-thumbnail.jpg']),
                'video' => null,
                'gallery' => json_encode([
                    ['id' => '573', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/572/apple-1.png', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/572/conversions/apple-1-thumbnail.jpg'],
                    ['id' => '574', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/573/apple-2.png', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/573/conversions/apple-2-thumbnail.jpg']
                ]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => '2021-03-08 10:24:53',
                'updated_at' => '2021-12-23 18:16:06'
            ],
            [
                'id' => 2,
                'name' => 'Baby Spinach',
                'slug' => 'baby-spinach',
                'description' => 'Spinach (Spinacia oleracea) is a leafy green flowering plant native to central and western Asia. It is of the order Caryophyllales, family Amaranthaceae, subfamily Chenopodioideae. Its leaves are a common edible vegetable consumed either fresh.',
                'type_id' => 1,
                'price' => 0.60,
                'shop_id' => 6,
                'sale_price' => null,
                'min_price' => 0.60,
                'max_price' => 0.60,
                'sku' => '2',
                'quantity' => 10,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '2lb',
                'height' => null,
                'width' => null,
                'length' => null,
                'image' => json_encode(['id' => '2', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/2/BabySpinach.jpg', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/2/conversions/BabySpinach-thumbnail.jpg']),
                'video' => null,
                'gallery' => json_encode([
                    ['id' => '576', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/575/baby-spinach-1.png', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/575/conversions/baby-spinach-1-thumbnail.jpg'],
                    ['id' => '577', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/576/baby-spinach-2.png', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/576/conversions/baby-spinach-2-thumbnail.jpg']
                ]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => '2021-03-08 10:26:13',
                'updated_at' => '2021-12-23 18:16:03'
            ],
            [
                'id' => 3,
                'name' => 'Blueberries',
                'slug' => 'blueberries',
                'description' => 'Blueberries are perennial flowering plants with blue or purple berries. They are classified in the section Cyanococcus within the genus Vaccinium. Vaccinium also includes cranberries, bilberries, huckleberries and Madeira blueberries. Commercial blueberries—both wild and cultivated —are all native to North America.',
                'type_id' => 1,
                'price' => 3.00,
                'shop_id' => 6,
                'sale_price' => null,
                'min_price' => 3.00,
                'max_price' => 3.00,
                'sku' => '3',
                'quantity' => 30,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1lb',
                'height' => null,
                'width' => null,
                'length' => null,
                'image' => json_encode(['id' => '3', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/3/blueberries.jpg', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/3/conversions/blueberries-thumbnail.jpg']),
                'video' => null,
                'gallery' => json_encode([
                    ['id' => '580', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/579/Bluberries-2.png', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/579/conversions/Bluberries-2-thumbnail.jpg'],
                    ['id' => '581', 'original' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/580/Bluberries.png', 'thumbnail' => 'https://pickbazarlaravel.s3.ap-southeast-1.amazonaws.com/580/conversions/Bluberries-thumbnail.jpg']
                ]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => '2021-03-08 10:40:00',
                'updated_at' => '2021-12-23 18:16:00'
            ]
        ];

        DB::table('products')->insert($products);
    }
};