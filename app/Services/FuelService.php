<?php

namespace App\Services;

use App\Repositories\FuelRepository;

class FuelService
{
    private $fuelRepository;

    public function __construct(FuelRepository $fuelRepository)
    {
        $this->fuelRepository = $fuelRepository;
    }

    public function findById($id)
    {
        return $this->fuelRepository->findById($id);
    }

    public function findAll()
    {
        return $this->fuelRepository->findAll();
    }

    public function findAllIds()
    {
        return $this->fuelRepository->findAllIds()->all();
    }
}