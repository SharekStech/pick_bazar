<?php
use Illuminate\Database\Seeder;

use Database\Seeders\TypeSeeder;
use Database\Seeders\TagSeeder;
use Database\Seeders\TaxSeeder;
use Database\Seeders\ShopSeeder;
use Database\Seeders\MediaSeeder;
use Database\Seeders\VariationOptionSeeder;

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
            TypeSeeder::class,
            ShopSeeder::class,
            ProductSeeder::class,
            CategorySeeder::class,
            AttributeSeeder::class,
            AttributeValueSeeder::class,
            TagSeeder::class,
            ManufacturerSeeder::class,
            AuthorSeeder::class,
            AttributeProductSeeder::class,
            AttachmentSeeder::class,
            CategoryProductSeeder::class,
            CouponSeeder::class,
            AddressSeeder::class,
            SettingsSeeder::class,
            PermissionSeeder::class,
            OrderSeeder::class,
            VariationSeeder::class,
            TaxSeeder::class,
            ShippingSeeder::class,
            ReviewSeeder::class,
            QuestionSeeder::class,
            ProductTagSeeder::class,
            OrderProductSeeder::class,
            ModelHasPermissionSeeder::class,
            MediaSeeder::class,
            DigitalFileSeeder::class,
            BannerSeeder::class,
            BalanceSeeder::class,
            VariationOptionSeeder::class,
            ProfileSeeder::class,
        ]);
    }
}
