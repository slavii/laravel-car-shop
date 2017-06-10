<?php

namespace App\Services;

use App\Repositories\RegionRepository;

class RegionService
{
    private $regionRepository;

    public function __construct(RegionRepository $regionRepository)
    {
        $this->regionRepository = $regionRepository;
    }

    public function findById($id)
    {
        return $this->regionRepository->findById($id);
    }

    public function findAll()
    {
        return $this->regionRepository->findAll();
    }
}