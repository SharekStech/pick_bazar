<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Marvel\Enums\CouponType;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->text('description')->nullable();
            $table->json('image')->nullable();
            $table->enum(
                'type',
                [
                    CouponType::FIXED_COUPON,
                    CouponType::PERCENTAGE_COUPON,
                    CouponType::FREE_SHIPPING_COUPON
                ]
            )->default(CouponType::DEFAULT_COUPON);
            $table->float('amount')->default(0);
            $table->float('minimum_cart_amount')->default(0);
            $table->string('active_from');
            $table->string('expire_at');
             $table->string('language')->default('en');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
