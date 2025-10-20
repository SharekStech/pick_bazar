<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Marvel\Enums\OrderStatus;
use Marvel\Enums\PaymentStatus;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_number')->unique();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->string('customer_contact');
            $table->string('customer_name')->nullable();
            $table->double('amount');
            $table->double('sales_tax')->nullable();
            $table->double('paid_total')->nullable();
            $table->double('total')->nullable();
            $table->double('cancelled_amount')->nullable();
            $table->unsignedBigInteger('coupon_id')->nullable();
            $table->foreign('coupon_id')->references('id')->on('coupons');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('orders');
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->foreign('shop_id')->references('id')->on('shops');
            $table->string('language')->default('en');
            $table->double('discount')->nullable();
            $table->string('payment_gateway')->nullable();
            $table->string('altered_payment_gateway')->nullable();
            $table->json('shipping_address')->nullable();
            $table->json('billing_address')->nullable();
            $table->unsignedBigInteger('logistics_provider')->nullable();
            $table->double('delivery_fee')->nullable();
            $table->string('delivery_time')->nullable();

            $table->enum(
                'order_status',
                [
                    OrderStatus::PENDING,
                    OrderStatus::PROCESSING,
                    OrderStatus::COMPLETED,
                    OrderStatus::REFUNDED,
                    OrderStatus::FAILED,
                    OrderStatus::CANCELLED,
                    OrderStatus::AT_LOCAL_FACILITY,
                    OrderStatus::OUT_FOR_DELIVERY
                ]
            )->default(OrderStatus::DEFAULT_ORDER_STATUS);
            $table->enum(
                'payment_status',
                [
                    PaymentStatus::PENDING,
                    PaymentStatus::PROCESSING,
                    PaymentStatus::SUCCESS,
                    PaymentStatus::FAILED,
                    PaymentStatus::REVERSAL,
                    PaymentStatus::CASH_ON_DELIVERY,
                    PaymentStatus::CASH,
                    PaymentStatus::WALLET,
                    PaymentStatus::AWAITING_FOR_APPROVAL
                ]
            )->default(PaymentStatus::DEFAULT_PAYMENT_STATUS);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
