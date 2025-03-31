<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\ArmyCorp;
class ArmyCorpController extends Controller
{
    public function vistaarmy(){
        return view('frm_cuerpoejercito');
    }
    public function enviarArmy(Request $request){
        $cuerpo = new ArmyCorp();
        $cuerpo->denomination=$request->denomination;

        $cuerpo->save();
        return$cuerpo;
}
}
