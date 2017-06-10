<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Body extends Model
{
    protected $table = 'bodies';

    public $timestamps = false;

    protected $fillable = ['name'];
}
