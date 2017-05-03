<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;
use DB;
use Request;

class Produk extends Model
{
  // menentukan nama tabel Kategoribarang karna berbeda dengan nama class kategoriproduk
  protected $table = 'product';

  // menentukan field barang_id yang di panggil dari tabel kategoribarangs
  protected $primaryKey = 'barang_id';

  public $fillable = ['id_category', 'product_sku', 'product_stok', 'product_name', 'product_description', 'product_price', 'product_berat', 'product_status', 'product_discount', 'slug'];

  public function category() {
    return $this->belongsTo('App\Models\Products\Category', 'id_category', 'id');
  }

  public function category() {
    return $this->belongsTo('App\Models\Products\Attribute', 'id_product');
  }

}
