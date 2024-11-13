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
        Schema::create('sanpham', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('img', 100);
            $table->integer('price');
            $table->tinyInteger('hide')->default(0);
            $table->tinyInteger('dacbiet')->default(0);
            $table->integer('view')->default(0);
            $table->tinyInteger('bestseller')->default(0);
            $table->unsignedBigInteger('iddm');
            $table->foreign('iddm')->references('id')->on('danhmuc')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sanpham');
    }
};