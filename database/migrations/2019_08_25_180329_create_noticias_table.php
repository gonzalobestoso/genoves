<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('encabezado');
            $table->string('contenido');
            $table->integer('destacado');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->string('imagen');
            $table->integer('tiponotificacion_id')->unsigned();
            $table->foreign('tiponotificacion_id')->references('id')->on('tipo_noticias');
            $table->integer('materia_carrera_id')->unsigned();
            $table->foreign('materia_carrera_id')->references('id')->on('materia_Carreras');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias');
    }
}
