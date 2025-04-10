<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/users', function (Request $request) {
//     return response()->json([
//         'status' => true,
//         'message' => 'Lista de usuarios',
//     ],200);
// });

// Rota para listar todos os usuários
Route::get('/users', [UserController::class, 'index']);
// Rota para listar um usuário específico
Route::get('/users/{user}', [UserController::class, 'show']);
// Rota para criar um novo usuário
Route::post('/users',[UserController::class, 'store']);