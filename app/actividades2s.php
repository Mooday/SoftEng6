<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class actividades2s extends Model
{
     protected $table='actividades2s';
    protected $fillable=['id','actividad','Empresa','tipo_vinculacion','total_beneficiarios','responsables','observaciones','estado'];

}
