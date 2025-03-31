<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //relacion muchos a muchos con cuartel
    public function quarters(){
        return $this->belongsToMany('App\Models\Quarter');
    }
    //relacion uno a muchos con soldados
    public function soldiers(){
        return $this->hasMany('App\Models\Soldier');
    }

}
