<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index($nombre, $lastname=null){

		$nombre=ucfirst($nombre);
		
		if($lastname){
			return "Bienvenido {$nombre} {$lastname}";
		}else{
			return "Bienvenido {$nombre}";
		}
    }
}
