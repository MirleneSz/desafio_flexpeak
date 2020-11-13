<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plano\Plano;
use App\Models\custo\Custo;
use App\Models\receita\Receita;
use RealRashid\SweetAlert\Facades\Alert;


class PlanoController extends Controller
{
    public function index()
    {

        $plano = new Plano();
        $custos = new Custo();
        $receitas = new Receita();


        // return ($plano->all());
        return view('plano.index')->with(['planos'=>$plano->all(),'custos'=>$custos->all(),'receitas'=>$receitas->all()]);
    }

    public function store(Request $request )
    {

      // return $request;

        $collection=collect($request->all())->except('_token');

        $plano = new Plano();

        $insert = $plano->create([
            'nome_conta'=>$collection['nome_conta'],
            'data_pagamento'=>$collection['data_pagamento'],
            'receita_valor'=>$collection['receita_valor'],
            'custo_valor'=>$collection['custo_valor'],
            'saldo'=>$collection['saldo'],



        ]);
        $insert->save();

        if ($insert) {

            Alert::success('Success', 'Plano inserido com sucesso!');
            return redirect()->route('home.plano');
            // ->alert('success', 'Plano inserido com sucesso!');
        }

    }

    public function show()
    {
        $plano = new Plano();
         // dd ($plano->all());
       return view('home')->with(['planos'=>$plano->all()]);



    }

    public  function saldo($receita, $custo)
    {
        $saldo = ($receita-$custo);
        return ($saldo);
    }

}
