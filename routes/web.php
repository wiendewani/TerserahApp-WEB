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

Route::get('/', 'HomeController@index');

// START Pembeli Controller
Route::get('/pembeli', ['middleware' => 'auth', 'uses' => 'PembeliController@index']);
Route::post('/pembeli/create', ['middleware' => 'auth', 'uses' => 'PembeliController@create']);
Route::get('/pembeli/edit/{kode_pembeli}', ['middleware' => 'auth', 'uses' => 'PembeliController@edit']);
Route::post('/pembeli/update/{kode_pembeli}', ['middleware' => 'auth', 'uses' => 'PembeliController@update']);
Route::get('/pembeli/{kode_pembeli}/delete', ['middleware' => 'auth', 'uses' => 'PembeliController@delete']);
Route::get('/pembeli/search', ['middleware' => 'auth', 'uses' => 'PembeliController@search']);
// END Pembeli Controller




// Route::get('/', 'HomeController@index')->name('home'); 
// Route::resource('transaksi', 'TransaksiController@index');
Route::get('/transaksi', 'TransaksiController@index');  

// Route::get('/transaksi', function(){
//     return view('transaksi.index');
// });








































// START Barang Controller

Route::get('/barang', ['middleware' => 'auth', 'uses' => 'BarangController@index']);
Route::post('/barang/create', ['middleware' => 'auth', 'uses' => 'BarangController@create']);
Route::get('/barang/edit/{id}', ['middleware' => 'auth', 'uses' => 'BarangController@edit']);
Route::post('/barang/update/{id}', ['middleware' => 'auth', 'uses' => 'BarangController@update']);
Route::get('/barang/delete/{id}', ['middleware' => 'auth', 'uses' => 'BarangController@destroy']);
Route::get('/barang/search', ['middleware' => 'auth', 'uses' => 'BarangController@search']);
// END Barang Controller
