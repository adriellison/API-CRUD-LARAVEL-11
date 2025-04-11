<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    //
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return response()->json([
                'status' => true,
                'message' => 'Logado com sucesso'
            ], 201);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => 'Login ou senha incorreto'
            ], 404);
        }
    }
}
