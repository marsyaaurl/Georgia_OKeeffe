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
        Schema::create('exhib3s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->date('selectDate');
            $table->string('selectTime');
            $table->string('category');
            $table->string('paymentMethod');
            $table->integer('quantity');
            $table->integer('totalPrice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exhib3');
    }
};
