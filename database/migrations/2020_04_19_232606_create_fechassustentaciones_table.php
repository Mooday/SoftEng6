<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFechassustentacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fechassustentaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('iduser')->require;
            $table->string('id_anteproyecto');
            $table->string('id_carrera');
            $table->string('estate');
            $table->boolean('active');
            $table->date('sustentationdate')->nullable();
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
        Schema::dropIfExists('fechassustentaciones');
    }
}
