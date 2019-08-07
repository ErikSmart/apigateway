<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->group(['middleware' => 'client.credentials'],function() use ($router){
$router->get('/autores','AutorController@index');
$router->post('/autores','AutorController@store');
$router->get('/autores/{id}','AutorController@show');
$router->put('/autores/{id}','AutorController@update');
$router->patch('/autores/{id}','AutorController@store');
$router->delete('/autores/{id}','AutorController@destroy');

$router->get('/libro','LibroController@Index');
$router->get('/libro/{id}','LibroController@show');
$router->post('/libro','LibroController@store');
$router->put('/libro/{id}','LibroController@update');
$router->patch('/libro/{id}','LibroController@update');
$router->delete('/libro/{id}','LibroController@destroy');
});
