<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\TokenController;

Route::prefix('v1')->group(function () {
    // login (gera JWT ou retorna token)
    Route::post('/auth/login', [TokenController::class, 'index']);

    // públicas (se quiser manter assim)
    Route::get('/agenda', [AgendaController::class, 'index']);
    Route::get('/agenda/{id}', [AgendaController::class, 'visualizar']);

    // protegidas por JWT
    Route::middleware(['JWTToken'])->group(function () {
        Route::post('/agenda', [AgendaController::class, 'criar']);
        Route::put('/agenda/{id}', [AgendaController::class, 'atualizar']);
        Route::delete('/agenda/{id}', [AgendaController::class, 'deletar']);
    });
});
