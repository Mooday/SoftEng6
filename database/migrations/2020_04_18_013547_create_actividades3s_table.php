<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividades3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('actividades3s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('actividad');
            $table->string('fecha_ejecucion');
            $table->string('total_hr');
            $table->integer('nu_participantes');
            $table->string('responsables');
            $table->string('observaciones'); 
            $table->integer('estado'); 
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
        Schema::dropIfExists('actividades3s');
    }
}
