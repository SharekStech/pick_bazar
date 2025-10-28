<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Marvel\Database\Models\Product;

class FlashSaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::inRandomOrder()->limit(15)->get();

        foreach ($products as $product) {
            DB::table('flash_sales')->insert([
                'product_id' => $product->id,
                'discount_percentage' => rand(10, 50),
                'start_time' => Carbon::now(),
                'end_time' => Carbon::now()->addDays(rand(1, 10)),
                'status' => 'active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
