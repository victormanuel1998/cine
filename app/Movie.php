<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected$fillable =[
        'name',
        'synopsis',
        'category',
        'director',
        'duration',
        'actors',
        'genre'

    ];
}
