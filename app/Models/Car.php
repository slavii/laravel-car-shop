<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['cars'];

    public function equipments()
    {
        return $this->belongsToMany(Equipment::class);
    }
}
