<?php

namespace App\Http\Controllers;

use App\Services\CarMakeService;
use App\Services\FuelService;
use App\Services\GearService;

class HomePageController extends Controller
{

    private $carMakeService;
    private $fuelService;
    private $gearService;

    public function __construct(CarMakeService $cms, FuelService $fs, GearService $gs)
    {
        $this->carMakeService = $cms;
        $this->fuelService = $fs;
        $this->gearService = $gs;
    }

    public function index()
    {
        $carMakes = $this->carMakeService->getAll();
        $fuels = $this->fuelService->getAll();
        $gears = $this->gearService->getAll();
        $array = [
            'carMakes' => $carMakes,
            'fuels' => $fuels,
            'gears' => $gears
        ];

        return view('welcome',['array'=>$array]);
    }
}