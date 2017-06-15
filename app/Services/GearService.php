<?php

namespace App\Services;

use App\Repositories\GearRepository;

class GearService
{
    private $gearRepository;

    public function __construct(GearRepository $gearRepository)
    {
        $this->gearRepository = $gearRepository;
    }

    public function getById($id)
    {
        return $this->gearRepository->findById($id);
    }

    public function findAll()
    {
        return $this->gearRepository->findAll();
    }

    public function findAllIds()
    {
        return $this->gearRepository->findAllIds()->all();
    }
}