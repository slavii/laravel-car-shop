<?php

namespace App\Repositories;

use App\Models\Fuel;

class FuelRepository
{
    private $fuel;

    public function __construct(Fuel $fuel)
    {
        $this->fuel = $fuel;
    }

    public function findById($id)
    {
        return $this->fuel->find($id);
    }

    public function getAll()
    {
        return $this->fuel->all();
    }
}