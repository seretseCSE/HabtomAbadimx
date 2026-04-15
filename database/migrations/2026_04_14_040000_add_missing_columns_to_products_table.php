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
        Schema::table('products', function (Blueprint $table) {
            // Add columns that might be missing
            if (!Schema::hasColumn('products', 'origin_country')) {
                $table->string('origin_country')->nullable();
            }
            
            if (!Schema::hasColumn('products', 'unit')) {
                $table->string('unit')->nullable();
            }
            
            if (!Schema::hasColumn('products', 'hs_code')) {
                $table->string('hs_code')->nullable();
            }
            
            if (!Schema::hasColumn('products', 'sku')) {
                $table->string('sku')->nullable();
            }
            
            if (!Schema::hasColumn('products', 'images')) {
                $table->json('images')->nullable();
            }
            
            if (!Schema::hasColumn('products', 'specifications')) {
                $table->json('specifications')->nullable();
            }
            
            if (!Schema::hasColumn('products', 'is_featured')) {
                $table->boolean('is_featured')->default(false);
            }
            
            if (!Schema::hasColumn('products', 'sort_order')) {
                $table->integer('sort_order')->default(0);
            }
            
            if (!Schema::hasColumn('products', 'deleted_at')) {
                $table->timestamp('deleted_at')->nullable();
            }
            
            // Add indexes for performance
            $table->index('is_featured');
            $table->index('sort_order');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // We won't drop columns in down() to avoid data loss
            // Just remove the indexes if they exist
            $table->dropIndex(['is_featured']);
            $table->dropIndex(['sort_order']);
            $table->dropIndex(['status']);
        });
    }
};
