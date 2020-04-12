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
    public function run()
    {
        Autoridad::truncate();

        Autoridad::create(['nombre'=>'Clifton','apellido'=>'Clunie','cargo'=>'Decano']);
        Autoridad::create(['nombre'=>'Giovana','apellido'=>'Garrido','cargo'=>'Vicedecana Académica']);
        Autoridad::create(['nombre'=>'Lydia','apellido'=>'de Toppin','cargo'=>'Vicedecana de Investigación, Postgrado y Extensión']);
        Autoridad::create(['nombre'=>'Juan','apellido'=>'Saldaña','cargo'=>'Coordinador']);
    }
}
