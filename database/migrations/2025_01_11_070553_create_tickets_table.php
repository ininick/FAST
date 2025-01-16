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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('owner_id');
            $table->string('ticket_details_id');
            $table->foreign('customer_id')->references('id')->on('users');
            $table->foreign('owner_id')->references('id')->on('users');
            $table->foreign('ticket_details_id')->references('id')->on('ticket_details')->onDelete('cascade');
            $table->enum('status', ['Submitted','Approved', 'Waiting for Customer', 'Active', 'Fulfilled', 'Closed'])->default('Submitted');
            $table->string('urgency');
            $table->string('escalation');
            $table->timestamps();
        });

        Schema::table('ticket_details', function (Blueprint $table) {
            $table->string('id')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};