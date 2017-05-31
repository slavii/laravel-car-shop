<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Make extends Model
{
    protected $fillable = ['make'];
    public $timestamps = false;

    public function models()
    {
        return $this->hasMany(Models::class);
    }

    public function findByMake($make)
    {

    }
}