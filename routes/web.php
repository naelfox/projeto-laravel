<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ConsultaController;

Route::get('/', [ConsultaController::class, 'index']);



Route::get('/consultas/criar', [ConsultaController::class, 'criar']);
Route::get('/consultas/{id}', [ConsultaController::class, 'show']);
Route::post('/consultas', [ConsultaController::class, 'store']);
Route::delete('/consultas/{id}', [ConsultaController::class, 'destroy']);
Route::get('/exames', function () {

$busca = request('search');

    return view('exames', ['busca' => $busca]);
});



Route::get('/exames_teste/{id?}', function ($id = null) {
    return view('exame', ['id' => $id]);
});
