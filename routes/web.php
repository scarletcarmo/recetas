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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//Recetas
$router->get('recetas', 'RecetaController@index');
$router->get('recetas/{id}', 'RecetaController@getById');
$router->post('recetas', 'RecetaController@store');

$router->get('ingredientes', 'IngredienteController@index');
$router->get('ingredientes/{id}', 'IngredienteController@getById');
$router->post('ingredientes', 'IngredienteController@store');

$router->post('ingredientereceta', 'IngredienteRecetaController@store');
$router->get('recetas/{receta_id}/ingredientes', 'IngredienteRecetaController@index');
$router->get('recetas/{receta_id}/ingredientes/{id}', 'IngredienteRecetaController@getById');

$router->post('preparacion', 'PreparacionController@store');
$router->get('recetas/{receta_id}/preparaciones', 'PreparacionController@index');
$router->get('recetas/{receta_id}/preparaciones/{id}', 'PreparacionController@getById');