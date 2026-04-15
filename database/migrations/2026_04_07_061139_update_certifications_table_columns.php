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
        Schema::table('certifications', function (Blueprint $table) {
            // Add missing columns if they don't exist
            $columns = [
                'name' => 'string',
                'issuing_body' => 'string',
                'certificate_number' => 'string',
                'issue_date' => 'date',
                'expiry_date' => 'date',
                'document_file' => 'string',
                'logo' => 'string',
                'is_featured' => 'boolean',
                'is_active' => 'boolean',
                'sort_order' => 'integer',
            ];

            foreach ($columns as $column => $type) {
                if (!Schema::hasColumn('certifications', $column)) {
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
        Schema::table('certifications', function (Blueprint $table) {
            $table->dropColumn(['name', 'issuing_body', 'certificate_number', 'issue_date', 'expiry_date', 'document_file', 'logo', 'is_featured', 'is_active', 'sort_order']);
        });
    }
};
