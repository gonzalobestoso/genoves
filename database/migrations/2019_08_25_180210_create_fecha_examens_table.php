<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFechaExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fecha_examens', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->integer('turno');
            $table->integer('materia_carrera_id')->unsigned();
            $table->foreign('materia_carrera_id')->references('id')->on('materia_carreras');
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
        Schema::dropIfExists('fecha_examens');
    }
}
