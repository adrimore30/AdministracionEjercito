<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Company;
class CompanyController extends Controller
{
    public function vistacompania(){
        return view('frm_compania');
    }
    public function enviarCompany (Request $request){
        $compani = new Company();
        $compani->activityc=$request->activityc;
        $compani->save();
        return$compani;
    }
}
