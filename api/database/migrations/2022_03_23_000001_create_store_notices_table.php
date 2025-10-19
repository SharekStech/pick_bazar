<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Marvel\Enums\StoreNoticePriority;
use Marvel\Enums\StoreNoticeType;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('store_notices', function (Blueprint $table) {
            $table->id();
            $table->enum('priority', [
                StoreNoticePriority::HIGH,
                StoreNoticePriority::MEDIUM,
                StoreNoticePriority::LOW,
            ]);
            $table->text('notice');
            $table->text('description')->nullable();
            $table->dateTime('effective_from')->default(now());
            $table->dateTime('expired_at');
            $table->enum(
                'type',
                [
                    StoreNoticeType::ALL_VENDOR,
                    StoreNoticeType::SPECIFIC_VENDOR,
                    StoreNoticeType::ALL_SHOP,
                    StoreNoticeType::SPECIFIC_SHOP,
                ]
            );
            $table->foreignId('created_by')->nullable()->references('id')->on('users');
            $table->foreignId('updated_by')->nullable()->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('store_notices');
    }
};