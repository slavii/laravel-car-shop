<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gear extends Model
{
    protected $table = 'gears';

    public $timestamps = false;

    protected $fillable = ['name'];
}
