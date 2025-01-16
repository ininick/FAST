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
        Schema::create('ticket_details', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string(column: 'name');
            $table->string('description')->nullable();
            $table->string('fulfillment');
            $table->timestamp('created_time')->useCurrent();
            $table->timestamp('updated_time')->useCurrentOnUpdate();
            $table->timestamp('resolved_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_details');
    }
};