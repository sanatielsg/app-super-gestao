<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    function index(){
        $fornecedores = ['Fornecedor1'];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
