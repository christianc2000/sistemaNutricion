<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlimentoComidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alimento_comidas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alimento_id')->references('id')->on('alimentos')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('comida_id')->references('id')->on('comidas')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->float('energia');
            $table->float('grasa');
            $table->float('hCarbono');
            $table->float('proteina');
            $table->float('fibraAlimentaria');
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
        Schema::dropIfExists('alimento_comidas');
    }
}
