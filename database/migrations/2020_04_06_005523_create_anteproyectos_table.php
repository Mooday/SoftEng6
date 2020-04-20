<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnteproyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anteproyectos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_user');
            $table->string('Nombre_anteproyecto')->required();
            $table->string('Tipo_Anteproyecto')->required();
            $table->string('Nombre_estudiante1')->required();
            $table->string('Cedula_est1')->required();
            $table->string('Nombre_estudiante2')->nullable();
            $table->string('Cedula_est2')->nullable();
            $table->string('Asesor')->required();
            $table->string('Asesor_empresa')->nullable();
            $table->string('Nombre_empresa')->nullable();
            $table->string('Carrera')->required();
            $table->string('Estado')->default('En Revision');
            $table->string('comentario')->default('Vacio');
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
        Schema::dropIfExists('anteproyectos');
    }
}
