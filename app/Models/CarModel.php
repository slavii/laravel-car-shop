<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $table = 'car_models';

    public $timestamps = false;

    protected $fillable = ['name', 'car_make_id'];

    public function car_makes()
    {
        return $this->belongsTo(CarMake::class);
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
