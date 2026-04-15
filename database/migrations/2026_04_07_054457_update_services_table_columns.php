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
            // Add missing columns if they don't exist
            if (!Schema::hasColumn('services', 'description')) {
                $table->text('description')->nullable()->after('slug');
            }
            if (!Schema::hasColumn('services', 'full_description')) {
                $table->text('full_description')->nullable()->after('description');
            }
            if (!Schema::hasColumn('services', 'icon')) {
                $table->string('icon')->nullable()->after('full_description');
            }
            if (!Schema::hasColumn('services', 'features')) {
                $table->json('features')->nullable()->after('icon');
            }
            if (!Schema::hasColumn('services', 'benefits')) {
                $table->text('benefits')->nullable()->after('features');
            }
            if (!Schema::hasColumn('services', 'process')) {
                $table->text('process')->nullable()->after('benefits');
            }
            if (!Schema::hasColumn('services', 'sort_order')) {
                $table->integer('sort_order')->default(0)->after('process');
            }
            if (!Schema::hasColumn('services', 'is_active')) {
                $table->boolean('is_active')->default(true)->after('sort_order');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            // Drop columns (optional - be careful with this)
            $table->dropColumn(['description', 'full_description', 'icon', 'features', 'benefits', 'process', 'sort_order', 'is_active']);
        });
    }
};
