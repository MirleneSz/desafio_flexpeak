<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor\Fornecedor;

class FornecedorController extends Controller
{

    public function index()
    {

        $fornecedor = new Fornecedor();
        //  return ($fornecedor->all());
        return view('fornecedor.index')->with(['fornecedores'=>$fornecedor->all()]);
    }


    public function store(Request $request )
    {
        $collection=collect($request->all())->except('_token');

        $fornecedor = new Fornecedor();

        $insert = $fornecedor->create($collection->all());

        if ($insert) {
            return redirect()->route('home.fornecedor')
             ->with('success', 'Fornecedor inserido com sucesso!');
        }

    }

    public function show()
    {
        $fornecedor = new Fornecedor();
        //  return ($fornecedor->all());
        return view('home')->with(['fornecedores'=>$fornecedor->all()]);

    }

}
