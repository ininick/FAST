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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_id');
            $table->unsignedBigInteger('search_owner_id');
            $table->unsignedBigInteger('owner_id');
            $table->string('task_details_id');
            $table->foreign('search_owner_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('ticket_id')->references('ticket_details_id')->on('tickets')->onDelete('cascade');
            $table->foreign('task_details_id')->references('id')->on('task_details')->onDelete('cascade');
            $table->string('escalation');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};