<?php

namespace App\Http\Controllers;


class HomePageController extends BaseController
{

    public function index()
    {
        $carMakes = $this->carMakeService->findAll();
        $fuels = $this->fuelService->findAll();
        $gears = $this->gearService->findAll();
        $array = [
            'carMakes' => $carMakes,
            'fuels' => $fuels,
            'gears' => $gears
        ];

        return view('welcome',['array'=>$array]);
    }
}