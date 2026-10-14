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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('hospital');
            $table->string('days');
            $table->string('from');
            $table->string('to');
            $table->string('off_days')->nullable();
            $table->text('address');
            $table->string('phone1');
            $table->string('phone1_type');
            $table->string('phone2')->nullable();
            $table->string('phone2_type')->nullable();
            $table->string('phone3')->nullable();
            $table->string('phone3_type')->nullable();
            $table->string('phone4')->nullable();
            $table->string('phone4_type')->nullable();
            $table->string('phone5')->nullable();
            $table->string('phone5_type')->nullable();
            $table->string('map');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
