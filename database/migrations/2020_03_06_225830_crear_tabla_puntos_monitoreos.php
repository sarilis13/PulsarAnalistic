<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPuntosMonitoreos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntos_monitoreos', function (Blueprint $table) {

        $table->increments('id');
        $table->string('nombre',100);
        $table->integer('x');
        $table->integer('y');
        $table->integer('z');
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
        Schema::dropIfExists('puntos_monitoreos');
    }
}
