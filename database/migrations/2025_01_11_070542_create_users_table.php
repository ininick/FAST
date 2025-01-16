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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('team_id');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('restrict');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique(); //udomain
            $table->string('password');
            $table->string('picture')->nullable();
            $table->string('work_location');
            $table->enum('status', ['Available', 'Busy', 'Offline', 'On Leave']);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};