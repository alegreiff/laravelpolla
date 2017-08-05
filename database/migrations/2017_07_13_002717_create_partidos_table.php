<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('local_id')->unsigned()->nullable();
            $table->integer('visitante_id')->unsigned()->nullable();
            $table->timestamp('fecha');
            $table->unsignedSmallInteger('fase')->nullable();
            $table->string('grupo', 1)->nullable();
            $table->integer('cities_id')->unsigned();
            $table->unsignedSmallInteger('lg')->nullable();
            $table->unsignedSmallInteger('vg')->nullable();
            $table->timestamps();

            //$table->integer('user_id')->unsigned();
            $table->foreign('local_id')->references('id')->on('equipos');
            $table->foreign('visitante_id')->references('id')->on('equipos');
            $table->foreign('cities_id')->references('id')->on('cities');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidos');
    }
}
