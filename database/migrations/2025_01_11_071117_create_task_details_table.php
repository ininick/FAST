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
        Schema::create('task_details', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->unsignedBigInteger('created_by_id');
            $table->unsignedBigInteger('modified_by_id');
            $table->unsignedBigInteger('resolved_by_id');
            $table->foreign('created_by_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('modified_by_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('resolved_by_id')->references('id')->on('users')->onDelete('restrict');            
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('fulfillment')->nullable();
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
        Schema::dropIfExists('task_details');
    }
};