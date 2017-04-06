<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ekspedisi extends Model
{
    public $fillable = ['id_pel', 'status', 'name', 'hp', 'email', 'line', 'bbm', 'alamat'];
}
