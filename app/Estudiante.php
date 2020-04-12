<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    //Campo que debe ser completado para almacenar el id de usuario dentro de la tabla estudiantes
    protected $fillable = ['id'];
}
