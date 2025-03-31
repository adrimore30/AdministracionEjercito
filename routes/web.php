<?php

namespace App\Http\Controllers;

use App\Models\ArmyCorp;
use App\Models\Company;
use App\Models\Quarter;
use PhpParser\Builder\Namespace_;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ejercito', [ArmyCorpController::class,'vistaarmy']);
Route::post('/crearEjercito', [ArmyCorpController::class, 'enviarArmy'])->name('ArmyCorp.enviarArmy');

Route::get('/cuart', [QuarterController::class,'vistacuartel']);
Route::post('/crearCuartel', [QuarterController::class, 'enviarQuarter'])->name('Quarter.enviarQuarter');

Route::get('/compani', [CompanyController::class,'vistacompania']);
Route::post('/crearCompania', [CompanyController::class, 'enviarCompany'])->name('Company.enviarCompany');


