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
        Schema::create('item__compra', function (Blueprint $table) {
            $table->unsignedBigInteger('id_shopping');
            $table->foreign('id_shopping')->references('id')->on('compras');

            $table->unsignedBigInteger('id_product');
            $table->foreign('id_product')->references('id')->on('produtos');

            $table->unsignedInteger('qtdd');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item__compras');
    }
};
