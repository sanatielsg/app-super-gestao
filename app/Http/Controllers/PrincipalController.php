<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    function principal(){ //os métodos são conhecidos como Actions
        //echo 'ai dento!'; //aqui um teste para renderizar,essa action é chamado pela rota, em routes/web.php
        return view('site.principal');  //o framework direcionará para a pasta resources/views/site/principal.blade.php
    }
}
