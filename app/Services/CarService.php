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

    public function findByIds($data)
    {
        $cars = [];

        foreach ($data as $datum) {
            $cars[] = $this->findById($datum->id);
        }
        return $cars;
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

    public function findMinYear()
    {
        return $this->carRepository->findMinYear();
    }

    public function findMaxYear()
    {
        return $this->carRepository->findMaxYear();
    }

    public function findMinPrice()
    {
        return $this->carRepository->findMinPrice();
    }

    public function findMaxPrice()
    {
        return $this->carRepository->findMaxPrice();
    }

    public function findMinMileage()
    {
        return $this->carRepository->findMinMileage();
    }

    public function findMaxMileage()
    {
        return $this->carRepository->findMaxMileage();
    }

    public function findMinPower()
    {
        return $this->carRepository->findMinPower();
    }

    public function findMaxPower()
    {
        return $this->carRepository->findMaxPower();
    }

    public function findAll()
    {
        return $this->carRepository->findAll();
    }

    public function findByParamsSortAsc($data, $sort)
    {
        $collection = $this->carRepository->findByParams($data);
        return $this->carRepository->sortCollectionAsc($collection, $sort);
    }

    public function findByParamsSortDesc($data, $sort)
    {
        $collection = $this->carRepository->findByParams($data);
        return $this->carRepository->sortCollectionDesc($collection, $sort);
    }
}