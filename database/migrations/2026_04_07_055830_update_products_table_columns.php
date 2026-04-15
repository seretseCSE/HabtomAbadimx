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
            // Add missing columns if they don't exist
            $columns = [
                'name' => 'string',
                'slug' => 'string',
                'description' => 'text',
                'category_id' => 'unsignedBigInteger',
                'origin_country' => 'string',
                'unit' => 'string',
                'hs_code' => 'string',
                'images' => 'json',
                'specifications' => 'json',
                'status' => 'string',
                'is_featured' => 'boolean',
                'sort_order' => 'integer',
            ];

            foreach ($columns as $column => $type) {
                if (!Schema::hasColumn('products', $column)) {
                    $table->$type($column)->nullable();
                }
            }

            // Add foreign key if it doesn't exist
            if (!Schema::hasColumn('products', 'category_id')) {
                $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn(['name', 'slug', 'description', 'category_id', 'origin_country', 'unit', 'hs_code', 'images', 'specifications', 'status', 'is_featured', 'sort_order']);
        });
    }
};
