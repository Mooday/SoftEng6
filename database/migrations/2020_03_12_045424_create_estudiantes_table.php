<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
<<<<<<< HEAD
=======

    //Tabla de estudiantes
>>>>>>> master
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
<<<<<<< HEAD
            $table->string('cedula')->nullable();
            $table->string('id_carrera')->nullable();
            $table->string('id_anteproyecto')->nullable();
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->string('titulo_trabajo_final')->nullable();
=======
            $table->string('cedula')->unique()->nullable();
            $table->integer('id_carrera')->nullable();
            /*$table->foreign('id_carrera')->references('id')->on('carreras');*/
>>>>>>> master
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
        Schema::dropIfExists('estudiantes');
    }
}
