<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FindCarPageController extends BaseController
{

    public function index()
    {
        $carMakes = $this->carMakeService->findAll();
        $fuels = $this->fuelService->findAll();
        $gears = $this->gearService->findAll();
        $conditions = $this->conditionService->findAll();
        $bodies = $this->bodyService->findAll();
        $colors = $this->colorService->findAll();
        $regions = $this->regionService->findAll();
        $equipments = $this->equipmentService->findAll();
        $doors = $this->doorService->findAll();

        $array = [
            'carMakes' => $carMakes,
            'fuels' => $fuels,
            'gears' => $gears,
            'conditions' => $conditions,
            'bodies' => $bodies,
            'colors' => $colors,
            'regions' => $regions,
            'equipments' => $equipments,
            'doors' => $doors
        ];

        return view('carviews.findcar', ['array' => $array]);
    }

    public function findResults(Request $request)
    {
        $carData = [
            'car_make_id' => $request->make,
            'car_model_id' => $request->model,
            'condition_id' => $request->condition,
            'priceFrom' => $request->priceFrom,
            'priceTo' => $request->priceTo,
            'yearFrom' => $request->yearFrom,
            'yearTo' => $request->yearTo,
            'fuel_id' => $request->fuel,
            'powerFrom' => $request->powerFrom,
            'powerTo' => $request->powerTo,
            'gears_id' => $request->gears,
            'body_id' => $request->body,
            'color_id' => $request->color,
            'mileageFrom' => $request->mileageFrom,
            'mileageTo' => $request->mileageTo,
            'region_id' => $request->region,
            'door_id' => $request->doors
        ];

        $sortBy = $request->sortBy;

        return $this->carService->findByParams($carData, $sortBy);
    }
}
