<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/users', function (Request $request) {
//     return response()->json([
//         'status' => true,
//         'message' => 'Lista de usuarios',
//     ],200);
// });

Route::get('/users', [UserController::class, 'index']);

Route::get('/users/{user}', [UserController::class, 'show']);