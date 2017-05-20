<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
  public $fillable = ['id_pel', 'status', 'name', 'hp', 'email', 'line', 'bbm', 'alamat'];
}
