<?php

namespace App\Services;

use App\Repositories\CarRepository;
use App\Validators\CarValidator;

class CarService
{
    private $carRepository;
    private $carValidator;

    public function __construct(CarRepository $carRepository, CarValidator $carValidator)
    {
        $this->carRepository = $carRepository;
        $this->carValidator = $carValidator;
    }

    public function findById($id)
    {
        return $this->carRepository->findById($id);
    }

    public function findAll()
    {
        return $this->carRepository->findAll();
    }


}