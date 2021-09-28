<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group([

    //'middleware' => 'api',
    //'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('register', 'AuthController@register');
    Route::post('payload', 'AuthController@payload');

});

//Employee Route
Route::apiResource('/employee', 'Api\EmployeeController');

Route::apiResource('/supplier', 'Api\SupplierController');
