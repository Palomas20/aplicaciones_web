<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcularEdadController extends Controller
{
    public function calcularedad($edad){
        if ($edad > 0 &&  $edad < 18){
            return 'Eres menor de edad ';
        }
        else if($edad >= 18 && $edad <= 100){
            return 'Eres mayor de edad ';
        }
        else {
            return 'Error';
        }
    }
}



