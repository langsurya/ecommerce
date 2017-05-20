<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
  protected $fillable = ['nama_bank', 'no_rekening', 'pemilik', 'cabang'];
}
