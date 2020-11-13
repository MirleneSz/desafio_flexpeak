<?php

namespace App\Models\plano;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    use HasFactory;

    protected $fillable = ['nome_conta','data_pagamento','custo_valor','receita_valor', 'saldo'];
    protected $table = "plano_conta";
}
