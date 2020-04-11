<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    protected $fillable=['title', 'type', 'description', 'start_date', 'end_date', 'image'];
}
