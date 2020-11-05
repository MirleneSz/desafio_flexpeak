<?php

namespace App\Models\fornecedor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    protected $fillable = ['nome','endereco','telefone'];
    protected $table = "fornecedor";

}
