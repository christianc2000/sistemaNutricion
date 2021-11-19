<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_actividads', function (Blueprint $table) {
            $table->id();

            $table->foreignId('actividad_id')->references('id')->on('actividads')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('control_id')->references('id')->on('controls')
            ->onUpdate('cascade')->onDelete('cascade');
     
            $table->integer('cantidadSemanal');
            $table->integer('tiempoDiario');
            $table->float('promedioDiario');
            $table->float('gastoPorActividad');
            $table->timestamp('fecha_hora_emitida');
            $table->timestamp('fecha_hora_cumplida');
            $table->boolean('cumplida')->nullable();
            $table->foreignId('unidad_medida_id')->references('id')->on('unidad_medidas')
            ->onUpdate('cascade')->onDelete('cascade');            
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
        Schema::dropIfExists('control_actividads');
    }
}
