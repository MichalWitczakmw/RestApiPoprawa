<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PEOPLEController;
Rute::get('/Witczak/305423/people',[PEOPLEController::class,'index']);
Rute::post('/Witczak/305423/people',[PEOPLEController::class,'create']);
Rute::get('/Witczak/305423/people/{}',[PEOPLEController::class,'show']);
Rute::delete('/Witczak/305423/people',[PEOPLEController::class,'delete']);
Rute::put('/Witczak/305423/people/{}',[PEOPLEController::class,'update']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
