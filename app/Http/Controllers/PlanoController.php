<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plano\Plano;
use App\Models\custo\Custo;
use App\Models\receita\Receita;

class PlanoController extends Controller
{
    public function index()
    {

        $plano = new Plano();
        $custos = new Custo();
        $receitas = new Receita();

        //  return ($plano->all());
        return view('plano.index')->with(['planos'=>$plano->all(),'custos'=>$custos->all(),'receitas'=>$receitas->all()]);
    }

    public function store(Request $request )
    {
        $collection=collect($request->all())->except('_token');

        $plano = new Plano();

        $insert = $plano->create($collection->all());

        if ($insert) {
            return redirect()->route('home.plano')
             ->with('success', 'Plano inserido com sucesso!');
        }

    }

    public function show()
    {
        $plano = new Plano();
        //  return ($plano->all());
        return view('home')->with(['planos'=>$plano->all()]);

    }

}
