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
        Schema::table('team_members', function (Blueprint $table) {
            // Add missing columns if they don't exist
            $columns = [
                'name' => 'string',
                'position' => 'string',
                'photo' => 'string',
                'linkedin_url' => 'string',
                'role' => 'string',
                'sort_order' => 'integer',
                'is_active' => 'boolean',
            ];

            foreach ($columns as $column => $type) {
                if (!Schema::hasColumn('team_members', $column)) {
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
        Schema::table('team_members', function (Blueprint $table) {
            $table->dropColumn(['name', 'position', 'photo', 'linkedin_url', 'role', 'sort_order', 'is_active']);
        });
    }
};
