<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nome',
        'Endereco',
        'Bairro',
        'Cep',
        'Cidade',
        'Estado',
    ];
}