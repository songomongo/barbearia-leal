<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ClienteFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

            'nome' => 'required|max:120|min:5',
            'celular' => 'required|max:11|min:10',
            'e-mail' => 'required|max:120|unique:usuarios,e-mail',
            'cpf' => 'required|max:11|min:11|unique:usuarios,cpf',
            'datadeNascimento' => 'required',
            'cidade' => 'required|max:120|',
            'estado' => 'required|max:2|min:2',
            'pais' => 'required|max:80|',
            'cep' => 'required|max:8|',
            'rua' => 'required|max:120|',
            'bairro' => 'required|max:100|',
            'numero' => 'required|max:10|',
            'complemento' => 'max:150',
            'pssword' => 'password'


        ];
    }
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'sucess' => false,
            'error' => $validator->errors()
        ]));
    }
    public function messages()
    {
        return[
            'nome.required' => 'O campo nome é obrigatorio',
            'nome.max' => 'O campo nome deve conter no maximo 80 caracteres',
            'nome.min' => 'O campo nome deve conter no minimo 5 caracteres',
            'celular.required' => 'o campo do celular é pbrigatório',
            'celular.max' => 'o campo do celular deve conter no maximo 11 caracteres',
            'celular.min' => 'o campo do celular tem que ter no minimo 10 caracteres',
            'e-mail.required' => 'o campo e-mail é obrigatorio',
            'e-email.e-mail' => 'formato de e-mail invalido',
            'e-mail.max' => 'o campo e-mail tem que ter no maximo 120 caracteres',
            'e-mail.unique' => 'e-mail já cadastrado no sistema',
            'cpf.required' => 'o campo cpf é obrigatorio',
            'cpf.unique' => 'o cpf já esta cadastrado no sistema',
            'cpf.max' => 'o campo cpf deve ter no maximo 11 carateres',
            'cpf.min' => 'o campo cpf deve ter no minimo 11 caracteres',
            'datadenascimento.required' => 'o campo data de nascimento é obrigatório',
            'cidade.required' => 'o campo cidade é obrigatório',
            'cidade.max' => 'o campo deve ter no maximo 120 caracteres',
            'estado.required' => 'o campo estado é obrigatório',
            'estado.max' => 'o campo estado tem que ter no maximo 2 caracteres',
            'estado.min' => 'o campo estado tem que ter no minimo 2 caracteres',
            'pais.required' => 'o campo pais é obrigatorio',
            'pais.max' => 'o campo pais tem que ter no maximo 80 carateres',
            'cep.required' => 'o campo cep é obrigatorio',
            'cep.max' => 'o campo cep tem que ter no max 8 caracteres' ,
            'rua.required' => 'o campo rua é obrigatorio',
            'rua.max' => 'o campo rua tem que ter no maximo 120 caracteres',
            'bairro.required' => 'o campo bairro é obrigatorio',
            'bairro.max' => 'o campo bairro tem que ter no max 100 caracteres',
            'numero.required' => 'o campo numero é obrigatório',
            'numero.max' => 'o campo numero tem que ter no maximo 10 caracteres',
            'complemento' => 'o campo não é obrigatório',
            'complemento.max' => 'o campo deve ter no maximo 150 caractres',
            'password.required' => 'o campo é obrigatório'
 
       
        ];
    }
}
