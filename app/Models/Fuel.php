<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    protected $table = 'fuels';

    public $timestamps = false;

    protected $fillable = ['name'];
}
