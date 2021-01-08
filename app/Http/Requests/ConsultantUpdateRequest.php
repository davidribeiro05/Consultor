<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultantUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required',
            'cpf' => 'required|max:11',
            'genero' => 'required',
            'email' => 'required',
        ];
    }

    public function messages()
    {
        return [
            "nome.required" => "Por favor, digite o seu nome!.",
            "cpf.required" => "Por favor, digite o seu CPF!.",
            "cpf.max" => "O CPF não deve exceder 11 digitos!.",
            "genero.required" => "Por favor, digite o seu genêro.",
            "email.required" => "Por favor, digite o seu email."
        ];
    }
}
