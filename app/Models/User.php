<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $fillable = ['email', 'password', 'first_name', 'last_name'];

    public $timestamps = false;

    protected $hidden = ['password'];
}
