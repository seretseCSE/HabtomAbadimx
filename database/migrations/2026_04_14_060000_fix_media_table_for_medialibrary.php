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
        Schema::table('media', function (Blueprint $table) {
            // Add missing columns for Spatie MediaLibrary
            if (!Schema::hasColumn('media', 'model_type')) {
                $table->string('model_type')->nullable();
            }
            
            if (!Schema::hasColumn('media', 'model_id')) {
                $table->unsignedBigInteger('model_id')->nullable();
            }
            
            if (!Schema::hasColumn('media', 'uuid')) {
                $table->string('uuid')->nullable();
            }
            
            if (!Schema::hasColumn('media', 'collection_name')) {
                $table->string('collection_name')->nullable();
            }
            
            if (!Schema::hasColumn('media', 'name')) {
                $table->string('name')->nullable();
            }
            
            if (!Schema::hasColumn('media', 'file_name')) {
                $table->string('file_name')->nullable();
            }
            
            if (!Schema::hasColumn('media', 'mime_type')) {
                $table->string('mime_type')->nullable();
            }
            
            if (!Schema::hasColumn('media', 'disk')) {
                $table->string('disk')->nullable();
            }
            
            if (!Schema::hasColumn('media', 'conversions_disk')) {
                $table->string('conversions_disk')->nullable();
            }
            
            if (!Schema::hasColumn('media', 'manipulations')) {
                $table->json('manipulations')->nullable();
            }
            
            if (!Schema::hasColumn('media', 'custom_properties')) {
                $table->json('custom_properties')->nullable();
            }
            
            if (!Schema::hasColumn('media', 'generated_conversions')) {
                $table->json('generated_conversions')->nullable();
            }
            
            if (!Schema::hasColumn('media', 'responsive_images')) {
                $table->json('responsive_images')->nullable();
            }
            
            // Add indexes
            $table->index(['model_type', 'model_id']);
            $table->index(['uuid']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('media', function (Blueprint $table) {
            // We won't drop columns in down() to avoid data loss
            // Just remove the indexes if they exist
            $table->dropIndex(['model_type', 'model_id']);
            $table->dropIndex(['uuid']);
        });
    }
};
