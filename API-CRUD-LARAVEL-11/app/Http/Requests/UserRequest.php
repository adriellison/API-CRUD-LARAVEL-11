<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password as RulesPassword;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status' => false,
            'message' => 'Erro de validação',
            'errors' => $validator->errors()
        ],402));
    }

    public function rules(): array
    {
        $userId = $this->route('user');

        return [
            'name' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($userId), // ignora o id do usuário que está sendo atualizado
            ],//'required|email|unique:users,email' . ($userId ? $userId->id : null), // se não for null, não valida o email
            'password' => [
                'required',
                RulesPassword::min(8) // mínimo 8 caracteres
                    -> letters() // letras
                    ->numbers()] // números
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O campo email deve ser um endereço de e-mail válido',
            'email.unique' => 'O email já está cadastrado',
            'password.required' => 'o campo senha é obrigatório',
            'password.min' => 'a senha deve ter no mínimo 8 caracteres',
            'password.letters' => 'a senha deve conter pelo menos uma letra',
            'password.numbers' => 'A senha deve conter pelo menos um número'
        ];
    }
}