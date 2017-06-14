<?php

namespace App\Services;

use App\Repositories\CarRepository;

class CarService
{
    private $carRepository;

    public function __construct(CarRepository $carRepository)
    {
        $this->carRepository = $carRepository;
    }

    public function findById($id)
    {
        return $this->carRepository->findById($id);
    }

    public function findAll()
    {
        return $this->carRepository->findAll();
    }

    public function currentId()
    {
        return $this->carRepository->currentId();
    }

    public function create($data)
    {
        return $this->carRepository->create($data);
    }

    public function setImages($id1, $id2)
    {
        return $this->carRepository->setImages($id1, $id2);
    }

    public function setEquipments($id1, $id2)
    {
        return $this->carRepository->setEquipments($id1, $id2);
    }

}