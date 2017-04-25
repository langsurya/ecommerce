<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model
{

  protected $table = 'kategoribarangs';
  protected $primaryKey = 'barang_id';

  public $fillable = ['nama_barang', 'parent', 'keterangan', 'status'];

  function __construct(argument)
  {
    # code...
  }
}
