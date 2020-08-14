<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'auth:api','prefix' => 'v1'], function () {
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
});

Route::group(['prefix' => 'v1'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('registrar', 'UserController@registrar');

    Route::get('funcionarios/list', "FuncionarioController@list");
    Route::get('funcionarios/show/{id}', "FuncionarioController@show");
    Route::post('funcionarios/create', "FuncionarioController@create");
    Route::post('funcionarios/destroy/{id}', "FuncionarioController@destroy");
    Route::post('funcionarios/update/{id}', "FuncionarioController@update");
});
