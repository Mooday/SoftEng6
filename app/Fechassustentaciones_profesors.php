<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fechassustentaciones_profesors extends Model
{
    //
    protected $fillable = [
        'id_fechassustentaciones', 'id_jurado1', 'id_jurado2', 'hora', 'codnota'];

    public function Fechassustentaciones()
    {
        return $this->hasMany('Fechassustentaciones');
    }
}