<?php

namespace App\Services;

use App\Repositories\CarModelRepository;

class CarModelService
{
    private $carModelRepository;

    public function __construct(CarModelRepository $carModelRepository)
    {
        $this->carModelRepository = $carModelRepository;
    }

    public function findById($id)
    {
        return $this->carModelRepository->findById($id);
    }

    public function findByMakeId($makeId)
    {
        return $this->carModelRepository->findByMakeId($makeId);
    }

    public function findAll()
    {
        return $this->carModelRepository->findAll();
    }

    public function findAllIds()
    {
        return $this->carModelRepository->findAllIds()->all();
    }
}