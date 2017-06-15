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

    public function car_makes()
    {
        return $this->belongsTo(CarMake::class, 'car_make_id');
    }

    public function car_models()
    {
        return $this->belongsTo(CarModel::class, 'car_model_id');
    }

    public function bodies()
    {
        return $this->belongsTo(Body::class, 'body_id');
    }

    public function colors()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }

    public function conditions()
    {
        return $this->belongsTo(Condition::class, 'condition_id');
    }

    public function doors()
    {
        return $this->belongsTo(Door::class, 'door_id');
    }

    public function fuels()
    {
        return $this->belongsTo(Fuel::class, 'fuel_id');
    }

    public function gears()
    {
        return $this->belongsTo(Gear::class, 'gear_id');
    }

    public function regions()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
