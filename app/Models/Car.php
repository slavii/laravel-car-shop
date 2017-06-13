<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';

    protected $fillable = [
        'car_make_id',
        'car_model_id',
        'condition_id',
        'price',
        'year',
        'fuel_id',
        'power',
        'gears_id',
        'body_id',
        'color_id',
        'mileage',
        'region_id',
        'door_id',
        'user_id'
    ];

    public function equipments()
    {
        return $this->belongsToMany(Equipment::class, 'cars_equipments');
    }

    public function images()
    {
        return $this->belongsToMany(Image::class, 'cars_images');
    }
}
