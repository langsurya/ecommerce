<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use Notifiable;
    //
    protected $fillable = [
      'name', 'username', 'email', 'password',
    ];

    protected $hidden = [
      'password', 'remember_token',
    ];
}
