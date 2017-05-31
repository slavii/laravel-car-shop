<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    public function make()
    {
        return $this->belongsTo(Make::class);
    }
}
