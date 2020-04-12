<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //Campos que deben ser completados para la creación de la solicitud de asesor de empresa 
    protected $fillable = ['id_estudiante', 'nombre_asesor', 'apellido_asesor', 'nombre_empresa'];
}
