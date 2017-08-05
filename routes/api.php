<?php

use Illuminate\Http\Request;

Route::post('/register', 'Auth\AuthController@register');
Route::post('/login', 'Auth\AuthController@login');
Route::post('/logout', 'Auth\AuthController@logout');



//proteger
Route::group(['middleware'=> 'jwt.auth'], function(){
	Route::get('/me', 'Auth\AuthController@user');	
	Route::get('/timeline', 'TimelineController@index');
	Route::get('/perfil', 'ProfileController@perfil');
	Route::post('/perfil', 'ProfileController@actualizaPerfil');
	Route::get('/miperfil', 'ProfileController@miperfil');

});

	Route::get('grupes', 'EquipoController@vue1');
	Route::get('matcheses', 'PartidoController@listaPartidos');
	Route::get('ciudades', 'CityController@index');