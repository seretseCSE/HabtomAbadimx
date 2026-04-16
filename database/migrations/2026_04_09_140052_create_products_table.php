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
            $table->string('slug')->unique();
            $table->text('description');
            $table->foreignId('category_id')->nullable();
            $table->decimal('price', 8, 2)->default(0.00);
            $table->string('origin_country')->nullable();
            $table->string('unit')->nullable();
            $table->string('hs_code')->nullable();
            $table->string('sku')->nullable();
            $table->json('images')->nullable();
            $table->json('specifications')->nullable();
            $table->boolean('featured')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->string('status')->default('active');
            $table->timestamps();
            $table->softDeletes();
            
            // Foreign key
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            
            // Indexes
            $table->index('is_featured');
            $table->index('sort_order');
            $table->index('status');
            $table->index('category_id');
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
