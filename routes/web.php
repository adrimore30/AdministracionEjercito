<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArmyCorpController;

Route::get('/army',[ArmyCorpController::class,'index'] );


