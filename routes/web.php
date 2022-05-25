<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/hola', function () use ($router) {
    return $router->app->version();
});

$router->get('/saludo/{nombre}', function($nombre){
    return 'el nombre del wey que entro es '.$nombre;
});

$router->post('/hola', function(){
    return 'Saquen las monitas chinaaas';
});

$router->put('/modificar', function(){
    return 'Esto esta modificando';
});

$router->delete('/eliminar', function(){
    return 'esto esta eliminando';
});

$router->get('/edades/{edad}', function($edad){
    if ($edad > 0 &&  $edad < 18){
        return 'Eres menor de edad ';
    }
    else if($edad >= 18 && $edad <= 100){
        return 'Eres mayor de edad ';
    }
    else {
        return 'Error';
    }
});
