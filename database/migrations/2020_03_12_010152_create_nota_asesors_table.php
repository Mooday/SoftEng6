<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotaAsesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Tabla de solicitudes para profesor asesor
        Schema::create('nota_asesors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_estudiante');
            $table->integer('id_profesor');
            $table->string('codigo')->nullable();
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
        Schema::dropIfExists('nota_asesors');
    }
}
