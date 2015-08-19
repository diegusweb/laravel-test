<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/probando/ruta', function(){
	//código a ejecutar cuando se produzca esa ruta y el verbo 
	return 'get';
});

Route::post('/probando/ruta', function(){
	//código a ejecutar cuando se produzca esa rutay el verbo POST
	return 'post';
});

Route::put('/probando/ruta', function(){
	//código a ejecutar cuando se produzca esa rutay el verbo PUT
	return 'put';
});

Route::delete('/probando/ruta', function(){
	//código a ejecutar cuando se produzca esa rutay el verbo DELETE
	return 'delete';
});

Route::match(['get', 'post', 'put'], '/testing', function () {
    echo  'Ruta testing para los verbos GET, POST, PUT';
});

Route::any("/cualquiercosa", function(){
	echo 'La ruta /cualquiercosa asociada a cualquier verbo';
});