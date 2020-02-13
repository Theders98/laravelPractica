<?php

use Illuminate\Http\Request;

//Rutas normales
Route::resources([
    'humans' => 'humansController',
    'saiyans' => 'saiyanController'
]);

//Rutas personalizadas con metodos
Route::get('humansRandom','humansController@random');
Route::get('saiyansRandom','saiyanController@random');

//Rutas con auth
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

    Route::resource('villans', 'villansController');
});

//Rutas ADMIN
Route::group([

    'middleware' => 'auth.role',
    'prefix' => 'admin'

], function ($router) {

    Route::get('humans', 'humansController@xd');
});
