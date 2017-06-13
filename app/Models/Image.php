<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    public $timestamps = false;

    protected $fillable = ['name'];

    public function cars()
    {
        return $this->belongsToMany(Car::class, 'cars_images');
    }
}
