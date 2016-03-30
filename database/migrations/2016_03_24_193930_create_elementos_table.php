<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elementos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('atomo');
            $table->string('oxidacion');
            $table->char('simbolo',5);
            $table->string('nombre',40);
            $table->string('masa',30);
            $table->string('electrones');

            $table->integer('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('tipos');

            $table->integer('subtipo_id')->unsigned();
            $table->foreign('subtipo_id')->references('id')->on('subtipos');

            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('estados');

            $table->integer('serie_id')->unsigned()->nullable();
            $table->foreign('serie_id')->references('id')->on('series');

            $table->integer('grupo_id')->unsigned()->nullable();
            $table->foreign('grupo_id')->references('id')->on('grupos');

            $table->integer('bloque_id')->unsigned();
            $table->foreign('bloque_id')->references('id')->on('bloques');

            $table->integer('periodo_id')->unsigned();
            $table->foreign('periodo_id')->references('id')->on('periodos');

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
        Schema::drop('elementos');
    }
}
