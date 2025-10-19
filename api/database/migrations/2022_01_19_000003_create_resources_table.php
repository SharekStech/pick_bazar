<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Marvel\Enums\ResourceType;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('icon')->nullable();
            $table->text('details')->nullable();
            $table->json('image')->nullable();
            $table->boolean('is_approved')->default(false);
            $table->double('price')->nullable();
            $table->enum('type', [ResourceType::DROPOFF_LOCATION, ResourceType::PICKUP_LOCATION, ResourceType::PERSON, ResourceType::DEPOSIT, ResourceType::FEATURES]);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};