<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNutricionistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutricionistas', function (Blueprint $table) {
            $table->foreignId('id')->references('id')->on('personas')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->primary('id');
            $table->string('profesion',40);
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
        Schema::dropIfExists('nutricionistas');
    }
}
