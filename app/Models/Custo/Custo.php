<?php

namespace App\Models\custo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custo extends Model
{
    use HasFactory;
    protected $fillable = ['descricao','valor', 'fornecedor_id'];
    protected $table = "custo";
}
