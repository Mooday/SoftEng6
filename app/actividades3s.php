<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actividades3s extends Model
{
     protected $table='actividades3s';
    protected $fillable=['id','actividad','fecha_ejecucion','total_hr','nu_participantes','responsables','observaciones','estado'];

}
