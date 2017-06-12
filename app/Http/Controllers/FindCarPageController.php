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

        return view('carviews.findcar',['array'=>$array]);
    }
}
