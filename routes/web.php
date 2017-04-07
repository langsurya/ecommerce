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


// masuk ke link localhost:8000/admin/ dengan prefix
Route::group(['prefix' => 'admin'], function() {

  // Controller Setting
  Route::group(['namespace' => 'backend'], function() {

    // Pelanggan & namespace berfungsi untuk masuk ke folder di controller
    Route::group(['namespace' => 'Pelanggan'], function() {
      // Route::resource('/namalink1', 'nama class Container')
      Route::resource('pelanggan', 'PelangganController');
    });
    
    // baca class Controller Pesanan di folder backend/Penjualan
    Route::group(['namespace' => 'Penjualan'], function() {
      // menampilkan link web:8000/admin/pesanan
      Route::get('pesanan', [
        'as' => 'pesanan.index', 'uses' => 'PesananController@index'
      ]);
      Route::post('pesanan', [
        'as' => 'pesanan.store', 'uses' => 'PesananController@store'
      ]);
      Route::get('pesanan/create', [
        'as' => 'pesanan.create', 'uses' => 'PesananController@create'
      ]);
    });

    // baca class Controller Kategori, Produk di folder backend/Produk
    Route::group(['namespace' => 'Produk'], function() {
      // produk Kategori
      Route::get('KategoriProduk', [
        'as' => 'kategoriproduk.index', 'uses' => 'KategoriprodukController@index'
      ]);
      Route::post('KategoriProduk', [
        'as' => 'KategoriProduk.store', 'uses' => 'KategoriprodukController@store'
      ]);
      Route::get('KategoriProduk/create', [
        'as' => 'kategoriproduk.create', 'uses' => 'KategoriprodukController@create'
      ]);
      // produk
      Route::get('produk', [
        'as' => 'produk.index', 'uses' => 'ProdukController@index'
      ]);
      Route::post('produk', [
        'as' => 'produk.store', 'uses' => 'ProdukController@store'
      ]);
      Route::get('produk/create', [
        'as' => 'produk.create', 'uses' => 'ProdukController@create'
      ]);
    });

    // baca class Controller Realtime di folder backend/stock
    Route::group(['namespace' => 'Stock'], function() {
      // realtime
      Route::get('realtime', [
        'as' => 'realtime.index', 'uses' => 'RealtimeController@index'
      ]);
    });

    // Baca class Controller Payment,kategoriPelanggan,ekspedisi di folder backend/Setting
    Route::group(['namespace' => 'Setting'], function() {
      Route::resource('payment', 'PaymentController');
      // eksepedisi
      Route::get('ekspedisi', [
        'as' => 'ekspedisi.index', 'uses' => 'EkspedisiController@index'
      ]);
      Route::post('ekspedisi', [
        'as' => 'ekspedisi.store', 'uses' => 'EkspedisiController@store'
      ]);
      Route::get('ekspedisi/create', [
        'as' => 'ekspedisi.create', 'uses' => 'EkspedisiController@create'
      ]);
      Route::resource('katpel', 'KatpelController');
    });
  });
});
