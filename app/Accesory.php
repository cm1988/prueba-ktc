<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accesory extends Model
{
    //
    protected $fillable = [

        'sku', 'description', 'country','maker','accesory_type_id'

    ];

}
