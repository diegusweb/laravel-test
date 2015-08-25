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


Route::get('home', 'HomeController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('contact', 
  ['as' => 'contact', 'uses' => 'AboutController@create']);
  
Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'AboutController@store']);



//Test
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

 /*Como puedes imaginar, existen casos en los que te puede interesar registrar una ruta que tenga validez con varios verbos, 
 indicando una única función que los resuelva todos. Esto se puede conseguir mediante dos métodos distintos.*/

Route::match(['get', 'post', 'put'], '/testing', function () {
    echo  'Ruta testing para los verbos GET, POST, PUT';
});

//Por otra parte tenemos el método any, que es como un comodín, que sirve para cualquier tipo de verbo del HTTP. 

Route::any("/cualquiercosa", function(){
	echo 'La ruta /cualquiercosa asociada a cualquier verbo';
});

//Con dos rutas registradas que tienen patrones distintos,

Route::get('categoria/{categoria}', function($categoria){
	return "Ruta 1- Viendo categoría $categoria y no recibo página";
});

Route::get('categoria/{categoria}/{pagina?}', function($categoria, $pagina=1){
	return "Ruta 2 - Viendo categoría $categoria y página $pagina";
});

//a controlador
Route::post('recibir', 'CategoriasController@recibirPost');

//Recibir parámetros de la ruta
Route::post('editar/{id}', 'CategoriasController@editar');
