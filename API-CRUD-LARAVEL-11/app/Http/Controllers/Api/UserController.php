<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function store(UserRequest $request)
    {
        //dd($request);
        DB::beginTransaction();

        try
        {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]);

            DB::commit();

            return response()->json([
                'status' => true,
                'message' => "Usuário cadastrado com sucesso!",
                'user' => [
                    'name' => $user->name,
                    'email' => $user->email
                ]
            ], 201);
        }
        catch (Exception $ex)
        {
            DB::rollBack();

            return response()->json([
                'status' => false,
                'message' => "Erro ao cadastrar usuário",
                'error' => $ex->getMessage() // Exibe a mensagem de erro com detalhes
            ], 400);
        }
    }

    public function update(UserRequest $request, User $user) : JsonResponse
    {
        DB::beginTransaction();

        try
        {
            // $user = User::find($request->id);

            // if (!$user)
            // {
            //     return response()->json([
            //         'status' => false,
            //         'message' => "Usuário não encontrado"
            //     ], 404);
            // }

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]);

            DB::commit();

            return response()->json([
                'status' => true,
                'id' => $user->id,
                'name' => $request->name,
                'message' => "Usuário atualizado com sucesso!"
            ], 200);
        }
        catch (Exception $ex)
        {
            DB::rollBack();

            return response()->json([
                'status' => false,
                'message' => "Erro ao atualizar usuário" //{$user->name}
            ], 400);
        }
    }
}