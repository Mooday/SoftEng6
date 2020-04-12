<?php

use Illuminate\Database\Seeder;
use App\Carrera;

class CarrerasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
<<<<<<< HEAD
=======

    //Seed para insertar las carreras(Testing)
>>>>>>> master
    public function run()
    {
        Carrera::truncate();

        Carrera::create(['nombre'=>'Licenciatura en Ingeniería de Sistemas y Computación']);
        Carrera::create(['nombre'=>'Licenciatura en Ingeniería de Sistemas de Información']);
        Carrera::create(['nombre'=>'Licenciatura en Desarrollo de Software']);
        Carrera::create(['nombre'=>'Licenciatura en Redes Informáticas']);
    }
}
