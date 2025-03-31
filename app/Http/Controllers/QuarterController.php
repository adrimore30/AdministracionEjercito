<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Quarter;
class QuarterController extends Controller
{
    public function vistacuartel(){
        return view('frm_cuartel');
    }
    public function enviarQuarter(Request $request){
        $cuart = new Quarter();
        $cuart->name=$request->name;
        $cuart->ubication=$request->ubication;
        $cuart->save();
        return$cuart;
    }
}
