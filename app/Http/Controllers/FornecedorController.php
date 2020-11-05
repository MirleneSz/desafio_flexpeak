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

    }

    public function show()
    {
        $fornecedor = new Fornecedor();
        //  return ($fornecedor->all());
        return view('home')->with(['fornecedores'=>$fornecedor->all()]);


    }


}
