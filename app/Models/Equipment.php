<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipments';

    public $timestamps = false;

    protected $fillable = ['name'];

    public function cars()
    {
        return $this->belongsToMany(Car::class, 'cars_equipments');
    }
}