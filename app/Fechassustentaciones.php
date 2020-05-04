<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fechassustentaciones extends Model
{
    //
    protected $fillable = [
        'iduser', 'id_anteproyecto', 'id_carrera', 'estate', 'active', 'sustentationdate'
    ];

}


