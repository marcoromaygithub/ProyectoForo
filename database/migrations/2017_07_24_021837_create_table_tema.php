<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tema', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_usuario');
            $table->string('titulo');
            $table->text('contenido');
            $table->integer('estado');
            $table->date('fecha');
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
        Schema::drop('tema');
    }
}
