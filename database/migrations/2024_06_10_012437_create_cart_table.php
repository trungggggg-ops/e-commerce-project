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
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idpro');
            $table->integer('price');
            $table->string('name', 100);
            $table->string('img', 200);
            $table->integer('soluong');
            $table->integer('thanhtien');
            $table->unsignedBigInteger('idbill');
            $table->foreign('idpro')->references('id')->on('sanpham')->onDelete('cascade');
            $table->foreign('idbill')->references('id')->on('bill')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};