<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'api/list', 'middleware' => 'auth:api'], function(){

    Route::get('/vendors', 'VendorsController@listVendors');

    Route::get('/vendor/{id}', 'VendorsController@listVendor');

    Route::get('/sales', 'SalesController@listSales');

    Route::get('/sale/{id}', 'SalesController@listSale');

    Route::post('/new/sale', 'SalesController@insert');
});

Route::get('/login', array(
    'as' => 'login',
    function() {
        return response()->json('Acesso negado', 403);
    }
));
