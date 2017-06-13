<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class AddCarController extends BaseController
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

        return view('carviews.addcar', ['array' => $array]);
    }

    public function store(Request $request)
    {
        $validateMake = $this->carService->validateMake();

        $car = new Car();

        $car->make = $request->make;
        $car->model = $request->model;
        $car->year = $request->year;
        $car->price = $request->price;
        $car->fuel = $request->fuel;
        $car->power = $request->power;
        $car->condition = $request->condition;
        $images = $request->file('images');

        if (empty($images)) {
            echo "Няма избрани изображения!";
            return 0;
        }

        $imgSrcs = '';

        foreach ($images as $image) {
            $extension = $image->getClientOriginalExtension();
            $fileName = str_shuffle(md5(date('Y-m-d\TH:i:s.u'))) . '.' . $extension;
            $image->move(public_path() . '\assets\images', $fileName);
            $imgSrcs .= $fileName . ',';
        }

        $car->images_src = substr($imgSrcs, 0, -1);
//        $car->save();

        return redirect('/');
    }
}
