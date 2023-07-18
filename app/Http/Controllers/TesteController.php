<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    function teste(int $p1, int $p2){
       // return "O resultado da soma de $p1 + $p2 é ".($p1+$p2); //passando parametros    
       //$retorno = ['p1'=>$p1, 'p2'=>$p2];//forma 1: array associativo
       //$retorno = compact('p1', 'p2'); //forma 2: compact(), valor das variaveis sem '$'
       //return view('site.teste',$retorno); 
       return view('site.teste')->with('p1', $p1)->with('p2',$p2); //forma 3 : with()
    }
}

