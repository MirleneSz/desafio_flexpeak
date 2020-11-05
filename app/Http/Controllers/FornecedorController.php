<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor\Fornecedor;

class FornecedorController extends Controller
{

    public function index()
    {
        return view('fornecedor.index');
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
