<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receita\Receita;
use App\Models\cliente\Cliente;

class ReceitaController extends Controller
{
    public function index()
    {

        $receita = new Receita();
        $clientes = new Cliente();


        //  return ($receita->all());
        return view('receita.index')->with(['receitas'=>$receita->all(), 'clientes'=>$clientes->all()]);
    }


    public function store(Request $request )
    {

       // return $request;
        $collection=collect($request->all())->except('_token');

        //return $collection;
        //return  $collection['cliente_id'];

        $receita = new Receita();

        $insert = $receita->create([
            'descricao' => $collection['descricao'],
            'valor' => $collection['valor'],
            'cliente_id' => $collection['cliente_id'],
        ]);
        $insert->save();

        if ($insert) {
            return redirect()->route('home.receita')
             ->with('success', 'Receita inserido com sucesso!');
        }

    }

    public function show()
    {
        $receita = new Receita();
        //  return ($receita->all());
        return view('home')->with(['receitas'=>$receita->all()]);

    }

}
