<?php

namespace App\Models\cliente;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nome','email','endereco', 'telefone'];
    protected $table = "cliente";
}
