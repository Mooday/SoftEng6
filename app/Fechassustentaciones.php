<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fechassustentaciones extends Model
{
    //
    protected $fillable = [
        'email', 'identification', 'name', 'projectname', 'faculty', 'estate', 'active', 'sustentationdate'
    ];

}


