<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_approved')->default(false);
            $table->json('image')->nullable();
            $table->json('cover_image')->nullable();
            $table->string('slug');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->text('description')->nullable();
            $table->string('website')->nullable();
            $table->json('socials')->nullable();
            $table->string('language')->default('en');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('manufacturers');
    }
};
