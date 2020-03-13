<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaMonitoreos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitoreos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('malla',45);
            $table->string('banco',45);
            $table->string('nivel',45);
            $table->date('fecha');
            $table->integer('puntomonitoreo_id')->unsigned();
            $table->integer('roca_id')->unsigned();
            $table->integer('explosivo_id')->unsigned();
            $table->integer('x');
            $table->integer('y');
            $table->integer('z');
            $table->double('carga_maxima');
            $table->double('VPP');
            $table->double('burden');
            $table->double('espaciamiento');
            $table->double('diametro');
            $table->double('caras_libres');
            $table->integer('tiempo_filas');
            $table->integer('tiempo_taladros');
            $table->integer('inicio_id')->unsigned();
            $table->integer('salida_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->timestamps();
            //referencias
            $table->foreign('puntomonitoreo_id')->references('id')->on('puntos_monitoreos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('roca_id')->references('id')->on('rocas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                $table->foreign('explosivo_id')->references('id')->on('explosivos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                $table->foreign('inicio_id')->references('id')->on('inicios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                $table->foreign('salida_id')->references('id')->on('salidas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                $table->foreign('usuario_id')->references('id')->on('usuarios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monitoreos');
    }
}
