<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')->references('id')->on('users');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->string('language')->default('en');

            $table->json('cover_image')->nullable();
            $table->json('logo')->nullable();
            $table->boolean('is_active')->default(false);
            $table->json('address')->nullable();
            $table->json('settings')->nullable();
            $table->timestamps();


          
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
