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


    //Seed para insertar profesores(Testing)

    public function run()
    {
        //Profesor::truncate();

        Profesor::firstOrCreate(['nombre'=>'Juan','apellido'=>'Saldaña','status'=>1]);
        Profesor::create(['nombre'=>'Cecilia','apellido'=>'de Beitia','status'=>1]);
        Profesor::create(['nombre'=>'Vladimir','apellido'=>'Villarreal','status'=>1]);
        Profesor::create(['nombre'=>'Lilia','apellido'=>'Muñoz','status'=>1]);
        Profesor::create(['nombre'=>'Yuraisma','apellido'=>'Moreno','status'=>1]);
    }
}
