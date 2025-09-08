<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tokencontroller;

use App\Http\Controllers\AgendaController;




Route::get('/agenda', [AgendaController::class, 'index']);  //200
Route::post('/agenda', [AgendaController::class, 'criar']);  //201
Route::get('/agenda/{id}', [AgendaController::class, 'visualizar']); //200 ou 404
Route::put('/agenda/{id}', [AgendaController::class, 'atualizar']); //200 ou 404
Route::delete('/agenda/{id}', [AgendaController::class, 'deletar']); //200 ou 404




Route::group(['middleware' => ['JWTToken']], function () {


});



