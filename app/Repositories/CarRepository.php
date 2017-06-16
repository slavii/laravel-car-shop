<?php

namespace App\Repositories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Collection;

class CarRepository
{
    private $car;

    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    public function findById($id)
    {
        return $this->car->find($id);
    }

    public function create($data)
    {
        return $this->car->create($data);
    }

    public function setImages($id1, $id2)
    {
        return $this->car->find($id1)->images()->attach($id2);
    }

    public function setEquipments($id1, $id2)
    {
        return $this->car->find($id1)->equipments()->attach($id2);
    }

    public function findMinYear()
    {
        return $this->car->min('year');
    }

    public function findMaxYear()
    {
        return $this->car->max('year');
    }

    public function findMinPrice()
    {
        return $this->car->min('price');
    }

    public function findMaxPrice()
    {
        return $this->car->max('price');
    }

    public function findMinMileage()
    {
        return $this->car->min('mileage');
    }

    public function findMaxMileage()
    {
        return $this->car->max('mileage');
    }

    public function findMinPower()
    {
        return $this->car->min('power');
    }

    public function findMaxPower()
    {
        return $this->car->max('power');
    }

    public function findAll()
    {
        return $this->car->all();
    }

    public function sortCollectionAsc($collection, $sort)
    {
        return $collection->sortBy($sort);
    }

    public function sortCollectionDesc($collection, $sort)
    {
        return $collection->sortByDesc($sort);
    }

    public function findByShortParams($data)
    {
        return $this->car
            ->whereIn('car_make_id', $data['car_make_id'])
            ->whereIn('car_model_id', $data['car_model_id'])
            ->whereIn('fuel_id', $data['fuel_id'])
            ->whereIn('gears_id', $data['gears_id'])
            ->where('price', '<=', $data['priceTo'])
            ->where('year', '>=', $data['yearFrom'])
            ->get();
    }

    public function findByParams($data)
    {
//        dd($this->findById($data['car_make_id'])->equipments->all());
        return $this->car
            ->whereIn('car_make_id', $data['car_make_id'])
            ->whereIn('car_model_id', $data['car_model_id'])
            ->whereIn('condition_id', $data['condition_id'])
            ->whereIn('fuel_id', $data['fuel_id'])
            ->whereIn('gears_id', $data['gears_id'])
            ->whereIn('body_id', $data['body_id'])
            ->whereIn('color_id', $data['color_id'])
            ->whereIn('region_id', $data['region_id'])
//            ->whereIn($this->findById($data['car_make_id'])->equipments->all(), $data['equipments'])
            ->whereBetween('price', [$data['priceFrom'], $data['priceTo']])
            ->whereBetween('year', [$data['yearFrom'], $data['yearTo']])
            ->whereBetween('power', [$data['powerFrom'], $data['powerTo']])
            ->whereBetween('mileage', [$data['mileageFrom'], $data['mileageTo']])
            ->get();
    }
}