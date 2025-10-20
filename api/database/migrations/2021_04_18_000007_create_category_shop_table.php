<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('category_shop', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shop_id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
            $table->string('language')->default('en');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('category_shop');
    }
};
