<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarMake extends Model
{
    protected $table = 'car_makes';

    public $timestamps = false;

    protected $fillable = ['name'];

    public function car_models()
    {
        return $this->hasMany(CarModel::class);
    }
}