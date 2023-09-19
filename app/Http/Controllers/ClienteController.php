<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteFormRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{

    public function store(ClienteFormRequest $request)
    {

        $clientes = Cliente::create([

            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'celular' => $request->celular,
            'e-mail' => $request->email,
            'cidade' => $request->ciade,
            'estado' => $request->estado,
            'datadeNascimento' => $request->datadeNascimento,
            'cep' => $request->cep,
            'rua' => $request->rua,
            'estado' => $request->estado,
            'pais' => $request->pais,
            'bairro' => $request->bairro,
            'numero' => $request->numero,
            'complemento' => $request->complemento,

            //senha
            'password' => Hash::make($request->password)

        ]);
        return response()->json([
            "sucess" => true,
            "message" => "cliente cadastro com sucesso",
            "data" => $clientes
        ], 200);
    }
    public function procurarPrNome(Request $request)
    {
        if (isset($request->nome)) {
        }
    }

    public function editar(Request $request)
    {
        $usuario = Cliente::find($request->id);

        if (!isset($usuario)) {
            return response()->json([
                'status' => false,
                'massage' => "Serviço não encontrado"
            ]);
        }
        if (isset($request->nome)) {
            $usuario->nome = $request->nome;
        }
        if (isset($request->datadeNascimento)) {
            $usuario->datadeNascimento = $request->datadeNascimento;
        }

        if (isset($request->idade)) {
            $usuario->idade = $request->idade;
        }

        if (isset($request->email)) {
            $usuario->email = $request->email;
        }

        if (isset($request->cpf)) {
            $usuario->cpf = $request->cpf;
        }
        if (isset($request->celular)) {
            $usuario->celular = $request->celular;
        }

        if (isset($request->cidade)) {
            $usuario->cidade = $request->cidade;
        }

        if (isset($request->cep)) {
            $usuario->cep = $request->cep;
        }

        if (isset($request->nome)) {
            $usuario->nome = $request->nome;
        }
        if (isset($request->datadeNascimento)) {
            $usuario->datadeNascimento = $request->datadeNascimento;
        }

        if (isset($request->idade)) {
            $usuario->idade = $request->idade;
        }

        if (isset($request->email)) {
            $usuario->email = $request->email;
        }

        $usuario->update();
        return response()->json([
            'status' => true,
            'message' => "Serviço atualizado"
        ]);
    }
}

