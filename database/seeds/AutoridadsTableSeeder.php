<?php

use Illuminate\Database\Seeder;
use App\Autoridad;

class AutoridadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //Seed para insertar las autoridades(Testing)
    public function run()
    {
        //Autoridad::truncate();

        Autoridad::firstOrCreate(['nombre'=>'Clifton','apellido'=>'Clunie','cargo'=>'Decano','status'=>0]);
        Autoridad::create(['nombre'=>'Giovana','apellido'=>'Garrido','cargo'=>'Vicedecana Académica','status'=>1]);
        Autoridad::create(['nombre'=>'Lydia','apellido'=>'de Toppin','cargo'=>'Vicedecana de Investigación, Postgrado y Extensión','status'=>1]);
        Autoridad::create(['nombre'=>'Juan','apellido'=>'Saldaña','cargo'=>'Coordinador', 'status'=>1]);
    }
}
