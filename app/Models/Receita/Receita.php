<?php

namespace App\Models\receita;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    use HasFactory;
    protected $fillable = ['descricao','valor', 'cliente_id'];
    protected $table = "receita";
}
