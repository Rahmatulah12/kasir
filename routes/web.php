<?php

use Illuminate\Support\Facades\Route;

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

// route customer
Route::get('/', 'CustomerController@index')->name('customer.index');
Route::get('/customer/{id}', 'CustomerController@show')->name('customer.show');
Route::get('/customer/create', 'CustomerController@create')->name('customer.create');
Route::post('/customer/create', 'CustomerController@store');
Route::delete('/customer/{id}', 'CustomerController@destroy');
Route::get('/customer/{id}/edit', 'CustomerController@edit')->name('customer.update');
Route::patch('/customer/edit', 'CustomerController@update');

// Route Transaksi
Route::resource('transaction', 'TransactionController');
