<?php

namespace App\Repositories;

use App\Models\Equipment;

class EquipmentRepository
{
    private $equipment;

    public function __construct(Equipment $equipment)
    {
        $this->equipment = $equipment;
    }

    public function findById($id)
    {
        return $this->equipment->find($id);
    }

    public function findAll()
    {
        return $this->equipment->all()->sortBy('name');
    }
}