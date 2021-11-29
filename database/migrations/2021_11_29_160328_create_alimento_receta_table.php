<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlimentoRecetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alimento_receta', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('peso'); //gramos

            $table->unsignedBigInteger('alimento_id');
            $table->unsignedBigInteger('receta_id');

            $table->foreign('alimento_id')->references('id')->on('alimentos');
            $table->foreign('receta_id')->references('id')->on('recetas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alimento_receta');
    }
}
