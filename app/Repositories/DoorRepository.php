<?php

namespace App\Repositories;

use App\Models\Door;

class DoorRepository
{
    private $door;

    public function __construct(Door $door)
    {
        $this->door = $door;
    }

    public function findById($id)
    {
        return $this->door->find($id);
    }

    public function findAll()
    {
        return $this->door->all();
    }
}