<?php

namespace App\Http\Controllers;

use App\Services\CarModelService;

class LoadModelsController extends Controller
{

    private $carModelService;

    public function __construct(CarModelService $carModelService)
    {
        $this->carModelService = $carModelService;
    }

    public function loadModels()
    {
        return $this->carModelService->getAll();
    }
}
