<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    protected $table = 'models';

    public $timestamps = false;

    public function makes()
    {
        return $this->belongsTo(Makes::class);
    }
}
