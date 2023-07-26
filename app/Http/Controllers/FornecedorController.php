<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    function index(){
        //$fornecedores = ['Fornecedor1'];
        $fornecedores = [
            0 => ['nome'=>'Fornecedor 1', 'status'=>'N', 'cnpj'=>'', 'ddd'=>'86', 'telefone'=>'00000-0000'],
            1 => ['nome'=>'Fornecedor 2', 'status'=>'S', 'ddd'=>'11', 'telefone'=>'00000-0000'],
            2 => ['nome'=>'Fornecedor 3', 'status'=>'N', 'ddd'=>'85', 'telefone'=>'00000-0000']
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
        //return view('app.fornecedor.index');
    }
}
