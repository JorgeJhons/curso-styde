<?php

Route::get('/',function(){
	return'home';
});

Route::get('/usuarios',function(){
	return'usuarios';
});

Route::get('/usuarios/{id}',function($id){
	return "Mostrando detalles del usuario: {$id}";
})->where('id','[0-9]+');

Route::get('/usuarios/nuevo', function(){
	return 'Crear nuevo usuario';
});

Route::get('/perfil/{nombre}/{lastname?}', function($nombre, $lastname=null){
	if($lastname){
		return "Bienvenido {$nombre} {$lastname}";
	}else{
		return "Bienvenido {$nombre}";
	}
});