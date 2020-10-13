<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class functions extends Model
{   
    protected $primaryKey = 'id';

    protected $table ='functions';

    protected$fillable =[
        'start',
        'end',
        'available',
        'type',

    ];
}
