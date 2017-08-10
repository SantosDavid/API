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

Route::get('/api/list/vendors', 'VendorsController@listVendors');

Route::get('/api/list/vendor/{id}', 'VendorsController@listVendor');

Route::get('/api/list/sales', 'SalesController@listSales');

Route::get('/api/list/sale/{id}', 'SalesController@listSale');

Route::post('/api/list/new/sale', 'SalesController@insert');
