<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index(){
    	$users=[
    		'James',
    		'Ellie',
    		'Tees',
    		'Tommy',
    		'Bill',
    	];
    	return view('users',[
    		'users' => $users,
    		'title' => 'LISTADO DE USUARIOS.'
    	]);
    }

    public function show($id){
    	return 'Mostrando detalles del usuario: {$id}';
    }

    public function create(){
    	return 'crear nuevo usuario.';
    }
}
