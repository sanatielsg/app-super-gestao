<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    function sobreNos(){
        //echo 'Sobre Nós! Em construção!';
        return view('site.sobre-nos');
    }
}
