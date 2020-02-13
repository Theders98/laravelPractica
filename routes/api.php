<?php

use Illuminate\Http\Request;


Route::resources([
    'humans' => 'humansController',
    'saiyans' => 'saiyanController',
    'villans' => 'villansController'
]);

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');


});
