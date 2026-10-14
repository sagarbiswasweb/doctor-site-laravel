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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            
            // Visitor Identification
            $table->string('ip_address')->nullable();
            $table->string('session_id')->nullable();

            // User Info
            $table->unsignedBigInteger('user_id')->nullable();

            // Request Data
            $table->string('url')->nullable();
            $table->text('user_agent')->nullable();
            $table->string('referrer')->nullable();

            // Device Info
            $table->string('device_type')->nullable();
            $table->string('browser')->nullable();
            $table->string('platform')->nullable();

            // Unique Tracking
            $table->date('visit_date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
