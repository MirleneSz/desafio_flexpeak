<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fornecedor\Fornecedor;

class FornecedorController extends Controller
{


    public function index()
    {
        $fornecedor = new Fornecedor();
        return view('home', ['fornecedores'=>$fornecedor]);


    }

    public function store(Request $request )
    {

    }

}
