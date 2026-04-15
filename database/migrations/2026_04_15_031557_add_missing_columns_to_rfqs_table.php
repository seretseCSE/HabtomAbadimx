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
        Schema::table('rfqs', function (Blueprint $table) {
            $table->unsignedBigInteger('service_type')->nullable()->after('phone');
            $table->string('product')->nullable()->after('service_type');
            $table->string('destination')->nullable()->after('quantity');
            $table->text('requirements')->nullable()->after('destination');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rfqs', function (Blueprint $table) {
            $table->dropColumn(['service_type', 'product', 'destination', 'requirements']);
        });
    }
};
