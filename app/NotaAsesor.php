<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaAsesor extends Model
{
    //Campos requeridos para la creación de la solicitud de profesor asesor
    protected $fillable = ['id_estudiante', 'id_profesor'];
}
