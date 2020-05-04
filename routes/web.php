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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home'); 
Route::get('/transaksi', 'WebController@index'); 


// START Customer Controller
Route::get('/customer','CustomerController@index');
Route::get('/customer/tambah','CustomerController@create');
Route::post('/customer/store','CustomerController@store');

Route::get('/customer/edit/{id}','CustomerController@edit');
Route::post('/customer/update','CustomerController@update');

Route::get('/customer/hapus/{id}','CustomerController@destroy');
// END Customer Controller
