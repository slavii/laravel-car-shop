<?php

namespace App\Http\Controllers;

use App\Services\CarMakeService;
use App\Services\FuelService;
use App\Services\GearService;
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

        return view('carviews.addcar',['array'=>$array]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Addcar();

        $this->validate($request, [
            'make' => 'required',
            'model' => 'required',
            'year' => 'required',
            'price' => 'required',
            'fuel' => 'required',
            'power' => 'required'
        ]);

        $car->make = $request->make;
        $car->model = $request->model;
        $car->year = $request->year;
        $car->price = $request->price;
        $car->fuel = $request->fuel;
        $car->power = $request->power;
        $car->condition = $request->condition;
        $files = $request->file('file');

        if (empty($files)) {
            echo "Няма избрани изображения!";
            return 0;
        }

        $imgSrcs = '';

        foreach ($files as $file) {
            $extension = $file->getClientOriginalExtension();
            $fileName = str_shuffle(md5(date('Y-m-d\TH:i:s.u'))) . '.' . $extension;
            $file->move(public_path() . '\assets\images', $fileName);
            $imgSrcs .= $fileName . ',';
        }

        $car->images_src = substr($imgSrcs, 0, -1);
        $car->save();

        echo "Успешен запис!";
        return redirect('/');
    }
}
