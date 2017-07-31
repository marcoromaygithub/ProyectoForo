<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_usuario');
            $table->integer('ci');
            $table->string('nombre');
            $table->string('ap_pat');
            $table->string('ap_mat');
            $table->date('fecha_nac');
            $table->string('correo');
            $table->string('direccion');
            $table->integer('telefono');
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
        Schema::drop('persona');
    }
}
