<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'cpf',
        'celular',
        'e-mail',
        'cidade',
        'estado',
        'datadeNascimento',
        'cep',
        'rua',
        'estado',
        'pais',
        'bairro',
        'numero',
        'complemento',
        'pssword'
    ];
}
