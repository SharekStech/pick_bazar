<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Marvel\Enums\ProductStatus;
use Marvel\Enums\ProductType;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('author_id')->nullable();
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('set null');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->double('price')->nullable();
            $table->double('sale_price')->nullable();
            $table->string('sku')->nullable();
            $table->integer('quantity')->default(0);
            $table->boolean('in_stock')->default(true);
            $table->boolean('is_taxable')->default(false);
            $table->unsignedBigInteger('shipping_class_id')->nullable();
            $table->foreign('shipping_class_id')->references('id')->on('shipping_classes');
            $table->boolean('is_external')->default(false);
            $table->boolean('is_digital')->default(false);
            $table->string('external_product_url')->nullable();
            $table->string('external_product_button_text')->nullable();
            $table->string('video')->nullable();
            $table->double('min_price')->nullable();
            $table->double('max_price')->nullable();
            $table->unsignedBigInteger('shop_id')->nullable();
$table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
$table->unsignedBigInteger('manufacturer_id')->nullable();
$table->foreign('manufacturer_id')->references('id')->on('manufacturers')->onDelete('set null');
            $table->enum(
                'status',
                [
                    ProductStatus::UNDER_REVIEW,
                    ProductStatus::APPROVED,
                    ProductStatus::REJECTED,
                    ProductStatus::PUBLISH,
                    ProductStatus::UNPUBLISH,
                    ProductStatus::DRAFT,
                ]
            )->default(ProductStatus::DRAFT);
            $table->enum(
                'product_type',
                [
                    ProductType::SIMPLE,
                    ProductType::VARIABLE,
                ]
            )->default(ProductType::SIMPLE);
            $table->string('unit');
            $table->string('height')->nullable();
            $table->string('width')->nullable();
            $table->string('length')->nullable();
            $table->json('image')->nullable();
            $table->json('gallery')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
