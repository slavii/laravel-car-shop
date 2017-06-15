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

    public function findAll()
    {
        return $this->makeRepository->findAll();
    }

    public function findAllIds()
    {
        return $this->makeRepository->findAllIds()->all();
    }
}