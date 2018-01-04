<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index(){

		//Comprobar si el arreglo esta vacio.ssss
    	if(request()->has('empty')){
	    	$users=[];
    	}else{
			$users=['James','Ellie','Tees','Tommy','Bill',];
    	}
    	
		$title='LISTADO DE USUARIOS.';
		return view('users',compact('title','users'));
    }

    public function show($id){
    	return 'Mostrando detalles del usuario: {$id}';
    }

    public function create(){
    	return 'crear nuevo usuario.';
    }
}
