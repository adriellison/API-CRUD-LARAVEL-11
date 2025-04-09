<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function index() : JsonResponse
    {
        $users = User::orderBy('id', 'desc')->paginate(5);
        
        return response()->json([
            'status' => true,
            'users' => $users
        ], 200);
    }

    public function show(User $user) : JsonResponse
    {
        return response()->json([
            'status' => true,
            'user' => $user
        ], 200);
    }
}