<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registro_evento extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'registro_eventos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Tipo_registro', 'Recursos_utilizados', 'Direccion_de_necesidades', 'Responsable', 'Correo', 'Telefono', 'Fecha_de_Inicio', 'Fecha_de_fin', 'Nombre_de_Actividad', 'Dirigido_a', 'Costo_de_Servicio', 'Tipo_de_Actividad', 'Tipo_de_Evento', 'Total_de_horas', 'Numero_de_participantes', 'Descripcion'];

    
}
