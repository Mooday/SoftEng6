<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegistroEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Tipo_registro');
            $table->string('Recursos_utilizados');
            $table->string('Direccion_de_necesidades')->nullable();
            $table->string('Responsable')->nullable();
            $table->string('Correo')->nullable();
            $table->string('Telefono')->nullable();
            $table->date('Fecha_de_Inicio')->nullable();
            $table->date('Fecha_de_fin')->nullable();
            $table->string('Nombre_de_Actividad')->nullable();
            $table->string('Dirigido_a')->nullable();
            $table->integer('Costo_de_Servicio')->nullable();
            $table->string('Tipo_de_Actividad');
            $table->string('Tipo_de_Evento');
            $table->integer('Total_de_horas')->nullable();
            $table->integer('Numero_de_participantes')->nullable();
            $table->string('Descripcion')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('registro_eventos');
    }
}
