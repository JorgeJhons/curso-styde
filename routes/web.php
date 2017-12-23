<?php

Route::get('/',function(){
	return'home';
});

Route::get('/usuarios','usercontroller@index');

Route::get('/usuarios/{id}','usercontroller@show')->where('id','[0-9]+');

Route::get('/usuarios/nuevo', 'usercontroller@create');

Route::get('/perfil/{nombre}/{lastname?}','WelcomeController@index');