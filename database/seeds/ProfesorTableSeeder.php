<?php

use Illuminate\Database\Seeder;
use App\Profesor;

class ProfesorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
<<<<<<< HEAD
=======

    //Seed para insertar profesores(Testing)
>>>>>>> master
    public function run()
    {
        Profesor::truncate();

        Profesor::create(['nombre'=>'Juan','apellido'=>'Saldaña']);
        Profesor::create(['nombre'=>'Cecilia','apellido'=>'de Beitia']);
        Profesor::create(['nombre'=>'Vladimir','apellido'=>'Villarreal']);
        Profesor::create(['nombre'=>'Lilia','apellido'=>'Muñoz']);
        Profesor::create(['nombre'=>'Yuraisma','apellido'=>'Moreno']);
    }
}
