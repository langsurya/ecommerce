<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
  // menentukan nama tabel Kategoribarang karna berbeda dengan nama class kategoriproduk
  protected $table = 'kategoribarangs';

  // menentukan field barang_id yang di panggil dari tabel kategoribarangs
  protected $primaryKey = 'barang_id';

  public $fillable = ['nama_barang', 'parent', 'keterangan', 'status'];
}
