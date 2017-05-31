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
	$api->get('/', function () {
		return ['Fruits' => 'Delicious and healthy!'];
	});

	$api->get('fruits', 'App\Http\Controllers\FruitsController@index');

	$api->get('fruit/{id}', 'App\Http\Controllers\FruitsController@show');
});
