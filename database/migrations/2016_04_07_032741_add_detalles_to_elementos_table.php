<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetallesToElementosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('elementos', function (Blueprint $table) {
            $table->integer('detalle_id')->unsigned()->nullable();
            $table->foreign('detalle_id')->references('id')->on('detalles');
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
        Schema::table('elementos', function (Blueprint $table) {
            $table->dropForeign(['detalle_id']);
            $table->dropColumn('detalle_id');
        });
    }
}
