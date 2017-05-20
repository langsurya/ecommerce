<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model
{

  protected $table = 'kategoribarangs';
  protected $primaryKey = 'barang_id';

  public $fillable = ['nama_barang', 'parent', 'keterangan', 'status'];

  public function category() {
    return $this->belongsTo('App\Models\Products\Category', 'id_category', 'id');
  }
}
