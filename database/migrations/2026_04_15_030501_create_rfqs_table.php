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
        Schema::create('rfqs', function (Blueprint $table) {
            $table->id();
            $table->string('rfq_number')->unique();
            $table->string('company_name');
            $table->string('contact_person');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->text('product');
            $table->integer('quantity');
            $table->text('requirements')->nullable();
            $table->string('service_type')->nullable();
            $table->string('destination')->nullable();
            $table->enum('status', ['New', 'In Review', 'Quoted', 'Closed'])->default('New');
            $table->text('internal_notes')->nullable();
            $table->decimal('quoted_price', 10, 2)->nullable();
            $table->string('quoted_by')->nullable();
            $table->timestamp('quoted_at')->nullable();
            $table->timestamp('closed_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rfqs');
    }
};
