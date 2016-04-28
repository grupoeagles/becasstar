<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormularioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario', function (Blueprint $table) {
            $table->increments('id_formulario')->unsigned();
            $table->integer('Pais_id_pais')->unsigned();
            $table->foreign('Pais_id_pais')->references('id_pais')->on('pais')->onDelete('cascade');
            $table->bigInteger('Aspirante_cedula')->unsigned();
            $table->foreign('Aspirante_cedula')->references('cedula')->on('aspirante')->onDelete('cascade');
            $table->integer('Disciplina_id')->unsigned();
            $table->foreign('Disciplina_id')->references('id_disciplina')->on('disciplina')->onDelete('cascade');
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
        Schema::drop('formulario');
    }
}
