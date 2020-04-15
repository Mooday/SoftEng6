<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autoridad extends Model
{
    protected $table = 'autoridads';

    protected $fillable = ['nombre', 'apellido', 'cargo', 'status'];
}
