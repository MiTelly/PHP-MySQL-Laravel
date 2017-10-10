<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customers', ['uses' => 'CustomersController@index']);
Route::get('/customers/create', ['uses' => 'CustomersController@create']);
Route::post('/customers', ['uses' => 'CustomersController@store']);
