<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 200);
            $table->string('abr', 2);
            $table->string('color', 7);
            $table->unsignedSmallInteger('bombo');
            $table->string('confederacion');
            $table->enum('grupo', ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H']);
            $table->string('posgrupo');
            $table->string('capital');
            $table->unsignedSmallInteger('fifa');
            $table->unsignedSmallInteger('pg');
            $table->unsignedSmallInteger('pe');
            $table->unsignedSmallInteger('pp');
            $table->smallInteger('gf');
            $table->smallInteger('gc');
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
        Schema::dropIfExists('equipos');
    }
}
