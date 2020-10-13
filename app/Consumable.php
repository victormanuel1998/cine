<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumable extends Model
{
    protected$fillable =[
        'name',
        'price',
        'quantity'
        
    ];
}
