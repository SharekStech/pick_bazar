<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('translations', function (Blueprint $table) {
            $table->id();
            $table->string('item_type');
            $table->unsignedBigInteger('item_id'); // this is the translated item id
            $table->unsignedBigInteger('translation_item_id')->nullable(); // this is the main element id
            $table->string('language_code');
            $table->string('source_language_code')->default(DEFAULT_LANGUAGE);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('translations');
    }
};