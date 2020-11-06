<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Custo\Custo;
use App\Models\fornecedor\Fornecedor;

class CustoController extends Controller
{
    public function index()
    {

        $custo = new Custo();
        $fornecedores = new Fornecedor();

        //  return ($custo->all());
        return view('custo.index')->with(['custos'=>$custo->all(), 'fornecedores'=>$fornecedores->all()]);
    }


    public function store(Request $request )
    {
        $collection=collect($request->all())->except('_token');

        $custo = new Custo();

        $insert = $custo->create([
            'descricao' => $collection['descricao'],
            'valor' => $collection['valor'],
            'fornecedor_id' => $collection['fornecedor_id'],
        ]);
        $insert->save();


        if ($insert) {
            return redirect()->route('home.custo')
             ->with('success', 'custo inserido com sucesso!');
        }

    }

    public function show()
    {
        $custo = new Custo();
        //  return ($custo->all());
        return view('home')->with(['custos'=>$custo->all()]);

    }

}
