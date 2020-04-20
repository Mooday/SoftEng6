<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class anteproyecto extends Model
{
    //
    protected $fillable = ['id_user','Nombre_anteproyecto', 'Tipo_Anteproyecto', 'Nombre_estudiante1', 'Cedula_est1',  'Nombre_estudiante2', 'Cedula_est2', 'Asesor', 'Asesor_empresa', 'Nombre_empresa','Carrera'];

}
