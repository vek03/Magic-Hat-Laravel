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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_categoria')->nullable();
            $table->foreign('id_categoria')->references('id')->on('categorias');

            $table->unsignedBigInteger('id_tipo1')->nullable();
            $table->foreign('id_tipo1')->references('id')->on('tipos');

            $table->unsignedBigInteger('id_tipo2')->nullable();
            $table->foreign('id_tipo2')->references('id')->on('tipos');

            $table->string('name');
            $table->enum('age_range',   ['Bebê', 'Criança','Pré-adolescente','Adolescente', 'Adulto']);
            $table->integer('qtdd');
            $table->double('price');
            $table->string('maker');
            $table->string('material');
            $table->text('description');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
