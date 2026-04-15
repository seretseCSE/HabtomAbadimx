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
        Schema::table('services', function (Blueprint $table) {
            // Check if columns exist and add them if they don't
            $columns = [
                'name' => 'string',
                'description' => 'text',
                'full_description' => 'text',
                'icon' => 'string',
                'features' => 'json',
                'benefits' => 'text',
                'process' => 'text',
                'sort_order' => 'integer',
                'is_active' => 'boolean',
            ];

            foreach ($columns as $column => $type) {
                if (!Schema::hasColumn('services', $column)) {
                    $table->$type($column)->nullable();
                }
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['name', 'description', 'full_description', 'icon', 'features', 'benefits', 'process', 'sort_order', 'is_active']);
        });
    }
};
