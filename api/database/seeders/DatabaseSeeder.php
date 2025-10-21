<?php


use Database\Seeders\VariationOptionSeeder;
use Database\Seeders\TagSeeder;
use Database\Seeders\TaxSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\ShopSeeder;
use Database\Seeders\TypeSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\MediaSeeder;
use Database\Seeders\OrderSeeder;
use Database\Seeders\AuthorSeeder;
use Database\Seeders\BannerSeeder;
use Database\Seeders\CouponSeeder;
use Database\Seeders\ReviewSeeder;
use Database\Seeders\AddressSeeder;
use Database\Seeders\BalanceSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\ProfileSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\QuestionSeeder;
use Database\Seeders\SettingsSeeder;
use Database\Seeders\ShippingSeeder;
use Database\Seeders\AttributeSeeder;
use Database\Seeders\VariationSeeder;
use Database\Seeders\AttachmentSeeder;
use Database\Seeders\PermissionSeeder;
use Database\Seeders\ProductTagSeeder;
use Database\Seeders\DigitalFileSeeder;
use Database\Seeders\ManufacturerSeeder;
use Database\Seeders\OrderProductSeeder;
use Database\Seeders\AttributeValueSeeder;
use Database\Seeders\CategoryProductSeeder;

use Database\Seeders\AttributeProductSeeder;
use Database\Seeders\ModelHasPermissionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionSeeder::class,
            UserSeeder::class,
            TypeSeeder::class,
            ShippingSeeder::class,
            TaxSeeder::class,
            SettingsSeeder::class,
            AttachmentSeeder::class,
            AuthorSeeder::class,
            ShopSeeder::class,
            ManufacturerSeeder::class,
            TagSeeder::class,
            CategorySeeder::class,
            AttributeSeeder::class,
            ProductSeeder::class,
            AttributeValueSeeder::class,
            AttributeProductSeeder::class,
            CategoryProductSeeder::class,
            ProductTagSeeder::class,
            VariationSeeder::class,
            CouponSeeder::class,
            AddressSeeder::class,
            ProfileSeeder::class,
            VariationOptionSeeder::class,
            VariationSeeder::class,


            OrderSeeder::class,
            OrderProductSeeder::class,
            ReviewSeeder::class,
            QuestionSeeder::class,
            DigitalFileSeeder::class,


            ModelHasPermissionSeeder::class,
            MediaSeeder::class,
            

        ]);
    }
}
