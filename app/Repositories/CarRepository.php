<?php

namespace App\Repositories;

use App\Models\Car;
use App\Services\BodyService;
use App\Services\CarMakeService;
use App\Services\CarModelService;
use App\Services\ColorService;
use App\Services\ConditionService;
use App\Services\DoorService;
use App\Services\FuelService;
use App\Services\GearService;
use App\Services\RegionService;

class CarRepository
{
    private $car;
    private $carMakeService;
    private $carModelService;
    private $conditionService;
    private $fuelService;
    private $gearService;
    private $bodyService;
    private $colorService;
    private $regionService;
    private $doorService;

    public function __construct(
        Car $car,
        CarMakeService $carMakeService,
        CarModelService $carModelService,
        ConditionService $conditionService,
        FuelService $fuelService,
        GearService $gearService,
        BodyService $bodyService,
        ColorService $colorService,
        RegionService $regionService,
        DoorService $doorService
    )
    {
        $this->car = $car;
        $this->carMakeService = $carMakeService;
        $this->carModelService = $carModelService;
        $this->conditionService = $conditionService;
        $this->fuelService = $fuelService;
        $this->gearService = $gearService;
        $this->bodyService = $bodyService;
        $this->colorService = $colorService;
        $this->regionService = $regionService;
        $this->doorService = $doorService;
    }

    public
    function findById($id)
    {
        return $this->car->find($id);
    }

    public
    function create($data)
    {
        return $this->car->create($data);
    }

    public
    function setImages($id1, $id2)
    {
        return $this->car->find($id1)->images()->attach($id2);
    }

    public
    function setEquipments($id1, $id2)
    {
        return $this->car->find($id1)->equipments()->attach($id2);
    }

    public
    function findMinYear()
    {
        return $this->car->min('year');
    }

    public
    function findMaxYear()
    {
        return $this->car->max('year');
    }

    public
    function findMinPrice()
    {
        return $this->car->min('price');
    }

    public
    function findMaxPrice()
    {
        return $this->car->max('price');
    }

    public
    function findMinMileage()
    {
        return $this->car->min('mileage');
    }

    public
    function findMaxMileage()
    {
        return $this->car->max('mileage');
    }

    public
    function findMinPower()
    {
        return $this->car->min('power');
    }

    public
    function findMaxPower()
    {
        return $this->car->max('power');
    }

    public
    function findAll()
    {
        return $this->car->all();
    }

    public
    function findByParams($data, $sortBy)
    {
        foreach ($data as $key => $value) {

            if ($data[$key] == '') {

                switch ($key) {

//                    case 'car_make_id':
//                    case 'car_model_id':
//                    case 'condition_id':
//                    case 'fuel_id':
//                    case 'gears_id':
//                    case 'body_id':
//                    case 'color_id':
//                    case 'region_id':
//                    case 'door_id': {
//                        $data[$key] = 0;
//                        break;
//                    }

                    case 'car_make_id': {
                        $data[$key] = array_keys($this->carMakeService->findAll()->all());
                        break;
                    }

                    case 'car_model_id': {
                        $data[$key] = $this->carModelService->findAll();
                        break;
                    }

                    case 'priceFrom': {
                        $data[$key] = $this->findMinPrice();
                        break;
                    }

                    case 'priceTo': {
                        $data[$key] = $this->findMaxPrice();
                        break;
                    }

                    case 'yearFrom': {
                        $data[$key] = $this->findMinYear();
                        break;
                    }

                    case 'yearTo': {
                        $data[$key] = $this->findMaxYear();
                        break;
                    }

                    case 'powerFrom': {
                        $data[$key] = $this->findMinPower();
                        break;
                    }

                    case 'powerTo': {
                        $data[$key] = $this->findMaxPower();
                        break;
                    }

                    case 'mileageFrom': {
                        $data[$key] = $this->findMinMileage();
                        break;
                    }

                    case 'mileageTo': {
                        $data[$key] = $this->findMaxMileage();
                        break;
                    }
                }
            }
        }

        return $this->car
            ->whereIn('car_make_id', $data['car_make_id'])
//            ->whereIn('car_model_id', array_keys($data['car_model_id']->all()))
//            ->whereIn('car_make_id', array_keys($data['car_make_id']->all()))
//            ->whereIn('car_make_id', array_keys($data['car_make_id']->all()))
//            ->whereIn('car_make_id', array_keys($data['car_make_id']->all()))
//            ->whereIn('car_make_id', array_keys($data['car_make_id']->all()))
//            ->whereIn('car_make_id', array_keys($data['car_make_id']->all()))
//            ->whereIn('car_make_id', array_keys($data['car_make_id']->all()))
//            ->whereIn('car_make_id', array_keys($data['car_make_id']->all()))
//                ['car_make_id', ]
//                ['car_model_id', '=', $data['car_model_id']],
//                ['condition_id', '=', $data['condition_id']],
//                ['fuel_id', '=', $data['fuel_id']],
//                ['gears_id', '=', $data['gears_id']],
//                ['body_id', '=', $data['body_id']],
//                ['color_id', '=', $data['color_id']],
//                ['region_id', '=', $data['region_id']],
//                ['door_id', '=', $data['door_id']]
//            ])
//            ->whereBetween('price', [$data['priceFrom'], $data['priceTo']])
//            ->whereBetween('year', [$data['yearFrom'], $data['yearTo']])
//            ->whereBetween('power', [$data['powerFrom'], $data['powerTo']])
//            ->whereBetween('mileage', [$data['mileageFrom'], $data['mileageTo']])
            ->get()->sortBy('price');
    }
}