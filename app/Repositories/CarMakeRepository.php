<?php

namespace App\Repositories;

use App\Models\CarMake;

class CarMakeRepository
{
    private $make;

    public function __construct(CarMake $carMake)
    {
        $this->make = $carMake;
    }

    public function findById($id)
    {
        return $this->make->find($id);
    }

    public function findAll()
    {
        return $this->make->all();
    }

}