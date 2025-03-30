<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultorController;

Route::get('/', function () {
    return view('home');
});

Route::get('/consultor/form', [ConsultorController::class, 'create']);
Route::post('/consultor', [ConsultorController::class, 'store'])->name('consultor.store');