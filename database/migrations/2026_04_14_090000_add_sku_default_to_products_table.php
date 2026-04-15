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
            // First, make the column nullable to allow existing records
            $table->string('sku')->nullable()->change();
            
            // Then update existing records to have a default SKU
            DB::table('products')->whereNull('sku')->update([
                'sku' => DB::raw('CONCAT("PRD-", id)')
            ]);
            
            // Finally, make it not nullable again with a default value
            $table->string('sku')->nullable(false)->default('')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('sku')->nullable()->change();
        });
    }
};
