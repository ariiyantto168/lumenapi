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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


// $router->get('/key', function() { 8
//     return \Illuminate\Support\Str::random(32);
// });

$router->get('/key',  'ExampleController@generateKey');
$router->post('/foo', 'ExampleController@fooExample');    
$router->get('/user/{id}', 'ExampleController@getUser');
$router->get('/post/cat1/{cat1}/cat2/{cat2}', 'ExampleController@getPost');
$router->get('/profile', ['as' => 'profile', 'uses' => 'ExampleController@getProfile']);
$router->get('/profile/action', ['as' => 'profile.action','uses' => 'ExampleController@getProfileAction']);

$router->get('/foo/bar', 'ExampleController@fooBar');
$router->post('/bar/foo', 'ExampleController@fooBar');

$router->get('/admin/home', ['middleware' => 'age', function () {
    return 'Old Enough';  
}]);

$router->get('/fail', function () {
    return 'Not yet mature';
});

// user Proile
$router->post('/user/profile/request', 'ExampleController@userProfile');

$router->get('/response', 'ExampleController@response');