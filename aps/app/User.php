<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use App\Models\orders;

class User extends Authenticatable
{
  use Notifiable;
    //
    protected $fillable = [
      'name', 'username', 'email', 'phone', 'password',
    ];

    protected $hidden = [
      'password', 'remember_token',
    ];

    public function isAdmin() {
    	return $this->admin; // mysql table comulmn
    }

    public function orders() {
      return $this->hasMany(Models\Orders::class);
    }
}
