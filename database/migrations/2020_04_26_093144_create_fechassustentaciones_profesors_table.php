<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFechassustentacionesProfesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fechassustentaciones_profesors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_fechassustentaciones')->references('id')->on('fechassustentaciones');
            $table->unsignedBigInteger('id_jurado1')->references('id')->on('profesors')->nullable();
            $table->unsignedBigInteger('id_jurado2')->references('id')->on('profesors')->nullable();
            $table->string('hora')->nullable();
            $table->string('codnota')->nullable();
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
        Schema::dropIfExists('fechassustentaciones_profesors');
    }
}
