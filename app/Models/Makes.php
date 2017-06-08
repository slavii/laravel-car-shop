<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Makes extends Model
{
    protected $table = 'makes';

    public $timestamps = false;

    public function models()
    {
        return $this->hasMany(Models::class);
    }
}