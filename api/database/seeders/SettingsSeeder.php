<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    public function run()
    {
        $settings = [
            'id' => 1,
            'options' => json_encode([
                'seo' => [
                    'ogImage' => null,
                    'ogTitle' => null,
                    'metaTags' => null,
                    'metaTitle' => null,
                    'canonicalUrl' => null,
                    'ogDescription' => null,
                    'twitterHandle' => null,
                    'metaDescription' => null,
                    'twitterCardType' => null
                ],
                 'logo' => [
            'id' => '862',
            // ✅ Localhost path ব্যবহার
            'original' => 'http://127.0.0.1:8000/assets/uploads/logo/nexen_logo.png',
            'thumbnail' => 'http://127.0.0.1:8000/assets/uploads/logo/nexen_logo.png' // যদি আলাদা thumbnail না থাকে
        ],
                'useOtp' => false,
                'useGoogleMap' => false,
                'currency' => 'USD',
                'taxClass' => '1',
                'siteTitle' => 'Nexen Health',
                'deliveryTime' => [
                    ['title' => 'Express Delivery', 'description' => '90 min express delivery'],
                    ['title' => 'Morning', 'description' => '8.00 AM - 11.00 AM'],
                    ['title' => 'Noon', 'description' => '11.00 AM - 2.00 PM'],
                    ['title' => 'Afternoon', 'description' => '2.00 PM - 5.00 PM'],
                    ['title' => 'Evening', 'description' => '5.00 PM - 8.00 PM']
                ],
                'signupPoints' => 100,
                'siteSubtitle' => 'Your next ecommerce',
                'shippingClass' => '1',
                'contactDetails' => [
                    'contact' => '01819400200',
                    'socials' => [
                        ['url' => 'https://www.facebook.com/', 'icon' => 'FacebookIcon'],
                        ['url' => 'https://twitter.com/home', 'icon' => 'TwitterIcon'],
                        ['url' => null, 'icon' => 'InstagramIcon']
                    ],
                    'website' => 'https://redq.io',
                    'location' => [
                        'lat' => 42.9585979,
                        'lng' => -76.90872019999999,
                        'zip' => null,
                        'city' => null,
                        'state' => 'NY',
                        'country' => 'Bangladesh',
                        'formattedAddress' => 'null'
                    ]
                ],
                'minimumOrderAmount' => 0,
                'currencyToWalletRatio' => 3,
                'maximumQuestionLimit' => 5,
                'useCashOnDelivery' => true,
                'freeShipping' => false,
                'freeShippingAmount' => 0,
                'paymentGateway' => [['name' => 'stripe', 'title' => 'Stripe']],
                'defaultPaymentGateway' => 'stripe',
                'isProductReview' => false,
                'useMustVerifyEmail' => false,
                'useEnableGateway' => false,
                'currencyOptions' => ['formation' => 'en-US', 'fractions' => 2],
                'guestCheckout' => true,
                'useAi' => false,
                'defaultAi' => 'openai',
                'maxShopDistance' => 1000
            ]),
            'created_at' => '2021-03-24 15:30:18',
            'updated_at' => '2022-01-15 19:02:50'
        ];

        DB::table('settings')->insert($settings);
    }
};
