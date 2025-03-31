<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
   //relacion muchos a muchos con soldados
   public function soldiers(){
    return $this->belongsToMany('App\Models\Soldier');
}
}
