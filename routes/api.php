<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VideoController;

Route::get('/', function () {
    return response()->json(['message' => 'API de videos'], 200);
});

Route::prefix('usuario')->group(function () {
    Route::post('/', [UsuarioController::class, 'criarUsuario']);
    Route::put('/{id}', [UsuarioController::class, 'atualizarUsuario']);
    Route::delete('/{id}', [UsuarioController::class, 'deletarUsuario']);
    Route::get('/{id}', [UsuarioController::class, 'buscarUsuarioPorId']);
});

Route::prefix('video')->group(function () {
    Route::post('/', [VideoController::class, 'criarVideo']);
    Route::put('/{id}', [VideoController::class, 'atualizarVideo']);
    Route::delete('/{id}', [VideoController::class, 'deletarVideo']);
    Route::get('/{id}', [VideoController::class, 'buscarVideoPorId']);
});