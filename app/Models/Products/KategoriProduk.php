<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;
use DB;
use Request;

class KategoriProduk extends Model
{
  // menentukan nama tabel Kategoribarang karna berbeda dengan nama class kategoriproduk
  protected $table = 'kategoribarangs';

  // menentukan field barang_id yang di panggil dari tabel kategoribarangs
  protected $primaryKey = 'barang_id';

  public $fillable = ['barang_id', 'nama_barang', 'parent', 'keterangan', 'status'];

  public function category() {
        return $this->belongsTo('App\Models\Products\Category', 'id_category', 'id');
    }
}
