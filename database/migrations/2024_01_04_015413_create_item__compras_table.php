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
            $table->unsignedBigInteger('id_compra')->nullable();
            $table->foreign('id_compra')->references('id')->on('compras');

            $table->unsignedBigInteger('id_produto')->nullable();
            $table->foreign('id_produto')->references('id')->on('produtos');

            $table->integer('qtdd');
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
