<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultorController;
use App\Http\Controllers\InfoController;


Route::get('/', function () {
    return view('home');
});

Route::post('/consultor', [ConsultorController::class, 'store'])->name('consultor.store');
Route::post('/info', [InfoController::class, 'store'])->name('info');