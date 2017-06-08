<?php

namespace App\Services;

use App\Repositories\CarMakeRepository;

class CarMakeService
{
    private $makeRepository;

    public function __construct(CarMakeRepository $carMakeRepository)
    {
        $this->makeRepository = $carMakeRepository;
    }

    public function findById($id)
    {
        return $this->makeRepository->findById($id);
    }

    public function getAll()
    {
        return $this->makeRepository->getAll();
    }
}