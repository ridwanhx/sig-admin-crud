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
        Schema::create('cinemas', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('website', 255);
            $table->string('phone', 15);
            $table->text('address');
            $table->string('city', 100);
            $table->string('province', 100);
            $table->string('country', 100);
            $table->char('postal_code', 5);
            $table->string('latitude', 100);
            $table->string('longitude', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cinemas');
    }
};