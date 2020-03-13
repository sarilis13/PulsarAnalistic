<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres',100);
            $table->string('apellidos',100);
            $table->string('correo',100)->unique();
            $table->string('usuario',100)->unique();
            $table->string('password',100);
            $table->string('celular',20);
            $table->integer('mina_id')->unsigned();
            $table->timestamps();
            //relaciones

            $table->foreign('mina_id')->references('id')->on('minas')
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
        Schema::dropIfExists('usuarios');
    }
}
