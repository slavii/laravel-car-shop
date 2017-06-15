<?php

namespace App\Http\Controllers;

class LoadModelsController extends BaseController
{
    public function loadModels()
    {
        return json_encode($this->carModelService->findAll());
    }
}
