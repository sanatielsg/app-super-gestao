<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    function index(){
        return view('app.fornecedor.index');
    }
}
