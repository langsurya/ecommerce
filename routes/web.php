<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', [
//   'as' => 'index', 'uses' => 'HomeController@index'
// ]);
// Route::get('register', [
//   'as' => 'register', 'uses' => 'SimpleauthController@register'
// ]);
//

// Route::resource('crud', 'CrudController');

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/admin', 'HomeController@admin');
// Route::get('/admin/table', 'HomeController@table');
// Route::get('/admin/forms', 'HomeController@forms');
// pesanan
Route::get('/admin/pesanan', [
  'as' => 'pesanan.index', 'uses' => 'PesananController@index'
]);
Route::post('/admin/pesanan', [
  'as' => 'pesanan.store', 'uses' => 'EkspedisiController@store'
]);
Route::get('/admin/pesanan/create', [
  'as' => 'pesanan.create', 'uses' => 'PesananController@create'
]);

// produk Kategori
Route::get('/admin/KategoriProduk', [
  'as' => 'kategoriproduk.index', 'uses' => 'KategoriprodukController@index'
]);
Route::post('/admin/KategoriProduk', [
  'as' => 'KategoriProduk.store', 'uses' => 'KategoriprodukController@store'
]);
Route::get('/admin/KategoriProduk/create', [
  'as' => 'kategoriproduk.create', 'uses' => 'KategoriprodukController@create'
]);
// produk
Route::get('/admin/produk', [
  'as' => 'produk.index', 'uses' => 'ProdukController@index'
]);
Route::post('/admin/produk', [
  'as' => 'produk.store', 'uses' => 'ProdukController@store'
]);
Route::get('/admin/produk/create', [
  'as' => 'produk.create', 'uses' => 'ProdukController@create'
]);


// eksepedisi
Route::get('/admin/ekspedisi', [
  'as' => 'ekspedisi.index', 'uses' => 'EkspedisiController@index'
]);
Route::post('/admin/ekspedisi', [
  'as' => 'ekspedisi.store', 'uses' => 'EkspedisiController@store'
]);
Route::get('/admin/ekspedisi/create', [
  'as' => 'ekspedisi.create', 'uses' => 'EkspedisiController@create'
]);
// .eksepedisi

// payment
Route::resource('/admin/payment', 'PaymentController');
// pelanggan
Route::resource('admin/pelanggan', 'PelangganController');
// Kategori Pelanggan
Route::resource('admin/katpel', 'KatpelController');
