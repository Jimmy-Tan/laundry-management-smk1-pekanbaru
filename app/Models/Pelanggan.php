<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pelanggan extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['id_pelanggan', 'email', 'no_hp', 'username', 'password'];
    protected $hidden = ['password', 'remember_token'];
}