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
        Schema::create('bill', function (Blueprint $table) {
            $table->id();
            $table->string('mahd', 50);
            $table->unsignedBigInteger('iduser');
            $table->string('nguoidat_ten', 50);
            $table->string('nguoidat_tel', 20);
            $table->string('nguoidat_diachi', 100);
            $table->string('nguoinhan_ten', 50);
            $table->string('nguoinhan_diachi', 100);
            $table->string('nguoinhan_tel', 20);
            $table->integer('total');
            $table->integer('ship');
            $table->integer('voucher');
            $table->integer('tongthanhtoan');
            $table->tinyInteger('pttt')->default(1);
            $table->timestamps();

            $table->foreign('iduser')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill');
    }
};