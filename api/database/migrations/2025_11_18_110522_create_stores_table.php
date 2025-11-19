<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stores', function (Blueprint $table) {
             $table->id();
            $table->unsignedBigInteger('office_id');  // head or sub head office
            $table->foreign('office_id')->references('id')->on('offices')->onDelete('cascade');

            $table->enum('type', ['OWN', 'COMMISSION']);
            $table->string('name');
            $table->string('address')->nullable();
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
