<?php

namespace App\Http\Controllers;


class CarPageController extends BaseController
{

    public function index($id)
    {
        $car = $this->carService->findById($id);

        return view('carviews.car', ['car' => $car]);
    }
}