<?php

namespace App\Http\Controllers;

use App\Services\CarModelService;
use Illuminate\Http\Request;

class LoadModelsController extends Controller
{

    private $carModelService;

    public function __construct(CarModelService $carModelService)
    {
        $this->carModelService = $carModelService;
    }

    public function loadModels()
    {
        return json_encode($this->carModelService->getAll());
    }

//    public function loadModelsByMakeId(Request $request)
//    {
//        return json_encode($this->carModelService->findByMakeId($request->input('makeId')));
//    }
}
