<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soldier extends Model
{
    //relacion de uno a muchos cuerpo ejercito
    public function armycorp(){
        return $this->belongsTo('App\Models\ArmyCorp');
    }

    //relacion de uno a muchos con cuartel
    public function quarter(){
        return $this->belongsTo('App\Models\Quarter');
    }

    //relacion de uno a muchos cuerpo compañia
    public function companies(){
        return $this->belongsTo('App\Models\Company');
    }

    //relacion muchos a muchos con servicio
    public function services(){
        return $this->belongsToMany('App\Models\Service');
    }
}
