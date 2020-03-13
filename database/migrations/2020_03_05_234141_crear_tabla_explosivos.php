<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaExplosivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('explosivos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100);
            $table->double('densidad');
            $table->double('VOD');
            $table->double('energia');
            $table->double('presion');
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
        Schema::dropIfExists('explosivos');
    }
}
