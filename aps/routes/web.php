<?php

Auth::routes();

Route::get('/home', [
  'as' => 'home.index', 'uses'=>  'HomeController@index']);

Route::get('/backend', 'HomeController@admin');

Route::group(['namespace' => 'Front'], function() {
  Route::get('/', 'PagesController@index');
  
  // Route::get('front', 'PageController@index');
  // Route::get('shop', 'PageController@shop');
  // Route::get('product_details/{id}', 'PageController@product_details');
  Route::get('cart', 'CartController@index');
  Route::get('cart/addItem/{id}', 'CartController@addItem');

  Route::get('/cart/remove/{id}', 'CartController@destroy');
  Route::put('/cart/update/{id}', 'CartController@update');

});


// masuk ke link localhost:8000/admin/ dengan prefix
Route::group(['prefix' => 'backend'], function() {

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
      Route::resource('category', 'CategoryController');

      // produk
      Route::resource('produk', 'ProdukController');
      Route::resource('image', 'ImageController');
    });

    // baca class Controller Realtime di folder backend/stock
    Route::group(['namespace' => 'Stock'], function() {
      // realtime
      Route::get('realtime', [
        'as' => 'realtime.index', 'uses' => 'RealtimeController@index'
      ]);
      Route::get('entry', [
        'as' => 'entry.index', 'uses' => 'EntryController@index'
      ]);
      Route::get('entry/create', [
        'as' => 'entry.create', 'uses' => 'EntryController@create'
      ]);
      Route::get('history', [
        'as' => 'history.index', 'uses' => 'HistoryController@index'
      ]);
    });
    Route::group(['namespace' => 'Finance'], function() {
      Route::get('finance', [
        'as' => 'finance.index', 'uses' => 'FinanceController@index'
      ]);
    });

    Route::group(['namespace' => 'Laporan'], function() {
      // Laporan Penjualan
      Route::get('penjualan', [
        'as' => 'penjualan.index', 'uses' => 'PenjualanController@index'
      ]);
      // Per barang
      Route::get('perbarang', [
        'as' => 'perbarang.index', 'uses' => 'PerbarangController@index'
      ]);
      // Per barang
      Route::get('perbarang/show', [
        'as' => 'show.index', 'uses' => 'PerbarangController@show'
      ]);
      // Per Pelanggan
      Route::get('perpelanggan', [
        'as' => 'perpelanggan.index', 'uses' => 'PerpelangganController@index'
      ]);
      Route::get('perpelanggan/show', [
        'as' => 'show.index', 'uses' => 'PerpelangganController@show'
      ]);
    });

    // Baca class Controller Payment,kategoriPelanggan,ekspedisi di folder backend/Setting
    Route::group(['namespace' => 'Setting'], function() {
      Route::resource('payment', 'PaymentController');
      // eksepedisi
      Route::resource('ekspedisi', 'EkspedisiController');
      // katpel
      Route::resource('katpel', 'KatpelController');
    });

    Route::group(['namespace' => 'Otorisasi'], function() {
      Route::get('pengguna', [
        'as' => 'pengguna.index', 'uses' => 'PenggunaController@index'
      ]);
      Route::get('pengguna/create', [
        'as' => 'pengguna.create', 'uses' => 'PenggunaController@create'
      ]);
    });
  });
});

Route::group(['namespace' => 'Front'], function() {
  Route::get('front', 'PageController@index');
  Route::get('shop', 'PageController@shop');
  Route::get('product_details/{id}', 'PageController@product_details');
  Route::get('cart', 'CartController@index');
  Route::get('cart/addItem/{id}', 'CartController@addItem');

  Route::get('/cart/remove/{id}', 'CartController@destroy');
  Route::put('/cart/update/{id}', 'CartController@update');

});