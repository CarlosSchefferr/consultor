<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultorController;
use App\Http\Controllers\CompromissoController;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('consultores', ConsultorController::class);
Route::resource('compromissos', CompromissoController::class);
Route::delete('/consultores/{consultor}', [ConsultorController::class, 'destroy'])->name('consultores.destroy');
Route::put('/compromissos/{compromisso}', [CompromissoController::class, 'update'])->name('compromissos.update');
