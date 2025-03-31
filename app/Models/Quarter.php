<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quarter extends Model
{
    //relacion uno a muchos con soldados
    public function soldiers(){
        return $this->hasMany('App\Models\Soldier');
    }
    //relacion muchos a muchos con compañia
    public function companies(){
        return $this->belongsToMany('App\Models\Company');
    }

}
