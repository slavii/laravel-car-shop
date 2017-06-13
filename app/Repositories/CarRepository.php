<?php

namespace App\Repositories;

use App\Models\Car;

class CarRepository
{
    private $car;

    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    public function findById($id)
    {
        return $this->car->find($id);
    }

    public function create($data)
    {
        return $this->car->create($data)->id;
    }
}