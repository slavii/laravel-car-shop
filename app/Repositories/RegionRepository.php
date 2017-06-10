<?php

namespace App\Repositories;

use App\Models\Region;

class RegionRepository
{
    private $region;

    public function __construct(Region $region)
    {
        $this->region = $region;
    }

    public function findById($id)
    {
        return $this->region->find($id);
    }

    public function findAll()
    {
        return $this->region->all();
    }
}