<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividades2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades2s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Empresa');
            $table->string('tipo_vinculacion');
            $table->string('actividad');
            $table->integer('total_beneficiarios');
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
        Schema::dropIfExists('actividades2s');
    }
}
