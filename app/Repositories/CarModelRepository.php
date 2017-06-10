<?php

namespace App\Repositories;

use App\Models\CarModel;

class CarModelRepository
{
    private $model;

    public function __construct(CarModel $carModel)
    {
        $this->model = $carModel;
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }

    public function findByMakeId($makeId)
    {
        return $this->model->where('car_make_id', $makeId)->get();
    }

    public function getAll()
    {
        return $this->model->all();
    }
}