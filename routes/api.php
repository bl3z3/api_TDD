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

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

	$api->get('fruits', 'App\Http\Controllers\FruitsController@index');

	$api->get('fruit/{id}', 'App\Http\Controllers\FruitsController@show');

	$api->post('authenticate', 'App\Http\Controllers\AuthenticateController@authenticate');

	$api->post('logout', 'App\Http\Controllers\AuthenticateController@logout');

	$api->get('token', 'App\Http\Controllers\AuthenticateController@getToken');
});

$api->version('v1', ['middleware' => 'api.auth'], function ($api) {
	$api->get('authenticated_user', 'App\Http\Controllers\AuthenticateController@authenticatedUser');

	$api->post('fruits', 'App\Http\Controllers\FruitsController@store');

	$api->delete('fruits/{id}', 'App\Http\Controllers\FruitsController@destroy');
});
