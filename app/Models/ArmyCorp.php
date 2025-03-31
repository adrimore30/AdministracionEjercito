<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArmyCorp extends Model
{
    //relacion uno a muchos con soldado
    public function soldiers(){
        return $this->hasMany('App\Models\Soldier');
    }
}
