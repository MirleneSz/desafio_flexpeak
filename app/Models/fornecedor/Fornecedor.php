<?php

namespace App\Models\fornecedor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    protected $fillable = ['nome','endereco','telefone'];
    protected $guarded = ['id', 'created_at', 'update_at'];

    public function getAll()
    {
        $this->all();

    }

}
