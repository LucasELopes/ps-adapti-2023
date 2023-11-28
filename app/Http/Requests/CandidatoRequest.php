<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidatoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "nome" => ["required", "string"],
            // "foto" => ["required", "string"],
            // "formado" => ["required", "bool"],
            // "curso" => ["required", "string"],
            // "descricao" => ["required", "string"],
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => "O campo nome precisa ser informado.",
            'nome.max' => "O campo deve ter no máximo 100 caracteres.",
            'foto.required' => "O campo da foto precisa ser informado.",
            'formado.required' => "O campo formado precisa ser informado.",
            'descricao.required' => "A descrição precisa ser informado.",
            'curso.required' => "O curso precisa ser informado.",
        ];
    }
}
