<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


$api = app('Dingo\Api\Routing\Router');

$api->version('v1',  ['namespace' => 'App\Http\Controllers\API', 'protected' => true], function ($api) {

    $api->get('docs', function () {
        return 'Documentacion de la API Rest';
    });
    $api->post('register', 'AuthController@register');
    $api->post('login', 'AuthController@login');
    $api->post('recover', 'AuthController@recover');

    $api->resource('users', 'UserController');

});