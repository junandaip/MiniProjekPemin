<?php
use Illuminate\Support\Str;
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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function () {
    return \Illuminate\Support\Str::random(32);
});

$router->get('blog', 'BlogController@index');

$router->get('/blog/{id}', 'BlogController@showById');

$router->post('blog', 'BlogController@store');

$router->put('blog/{id}', 'BlogController@update');

$router->delete('blog/{id}', 'BlogController@destroy');