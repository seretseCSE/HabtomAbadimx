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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('origin_country');
            $table->string('unit');
            $table->string('hs_code');
            $table->string('sku');
            $table->json('images')->nullable();
            $table->json('specifications')->nullable();
            $table->string('status');
            $table->boolean('is_featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
            
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->index('status');
            $table->index('is_featured');
            $table->index('sort_order');
            $table->index('slug');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
