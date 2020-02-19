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
$api->version('v1', function($api){
    $api->group(['middleware' => 'api.auth'], function ($api) {
       
        $api->delete('/logout' , 'App\Http\Controllers\AuthController@logout');
        $api->post('/store' , 'App\Http\Controllers\MaterialController@store');
      
        $api->post('/index' , 'App\Http\Controllers\MaterialController@index');
        $api->get('/show/{$uuid}' , 'App\Http\Controllers\MaterialController@show');
        $api->delete('/delete' , 'App\Http\Controllers\MaterialController@destroy');
        $api->post('/nilai' , 'App\Http\Controllers\NilaiController@storeK');
        $api->post('/storeK' , 'App\Http\Controllers\KuisController@storeK');
        $api->get('/indexK' , 'App\Http\Controllers\KuisController@indexK');
    });
    $api->post('/login' , 'App\Http\Controllers\AuthController@login');
    $api->post('/register' , 'App\Http\Controllers\AuthController@register');
}); 
