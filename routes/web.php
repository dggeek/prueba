<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(OperacionesController::class)->group(function(){
    Route::get('operaciones/suma','suma');
    Route::get('operaciones/multiplicacion','multiplicacion');
    Route::get('operaciones/exponente','exponente');
    Route::get('operaciones/salir','salir');
    Route::get('operaciones/index','index');
});