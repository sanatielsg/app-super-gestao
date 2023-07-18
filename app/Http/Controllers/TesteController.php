<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    function teste(int $p1, int $p2){
       return "O resultado da soma de $p1 + $p2 é ".($p1+$p2);     
    }
}
