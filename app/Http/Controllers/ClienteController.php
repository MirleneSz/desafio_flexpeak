<?php

namespace App\Http\Controllers;

use App\Models\Cliente\Cliente;
use Illuminate\Http\Request;



class ClienteController extends Controller
{
    public function index()
    {
        $cliente = new Cliente ();
          //return ($cliente->all());
         return view('cliente.index')->with(['clientes'=>$cliente->all()]);
    }

    public function store(Request $request )
    {
        $collection=collect($request->all())->except('_token');

        $cliente = new Cliente();

        $insert = $cliente->create($collection->all());

        if ($insert) {
            return redirect()->route('home.cliente')
             ->with('success', 'Cliente inserido com sucesso!');

        }
    }

    public function show()
    {
        $cliente= new Cliente();
        //  return ($cliente->all());
        return view('home')->with(['clientes'=>$cliente->all()]);

    }

}

