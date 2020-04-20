<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actividades extends Model
{
     protected $table='actividades';
    protected $fillable=['id','actividad','modalidad','fecha_ejecucion','total_hr','nu_participantes','responsables','observaciones','estado'];

}
