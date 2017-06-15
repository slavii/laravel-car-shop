<?php

namespace App\Repositories;

use App\Models\Color;

class ColorRepository
{
    private $color;

    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    public function findById($id)
    {
        return $this->color->find($id);
    }

    public function findAll()
    {
        return $this->color->all();
    }

    public function findAllIds()
    {
        return $this->color->all()->pluck('id');
    }
}