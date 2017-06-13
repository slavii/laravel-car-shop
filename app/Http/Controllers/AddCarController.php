<?php

namespace App\Http\Controllers;

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
        $this->carValidator->validateFields();

        dd($request->equipments);

        $carData = [
            'car_make_id' => $request->make,
            'car_model_id' => $request->model,
            'condition_id' => $request->condition,
            'price' => $request->price,
            'year' => $request->year,
            'fuel_id' => $request->fuel,
            'power' => $request->power,
            'gears_id' => $request->gears,
            'body_id' => $request->body,
            'color_id' => $request->color,
            'mileage' => $request->mileage,
            'region_id' => $request->region,
            'door_id' => $request->doors,

            'image_id' => 1,
            'user_id' => 1,
            'car_equipment_id' => 1
        ];

        $this->carService->create($carData);

//        $images = $request->file('images');
//
//        if (empty($images)) {
//            echo "Няма избрани изображения!";
//            return 0;
//        }
//
//        $imgSrcs = '';
//
//        foreach ($images as $image) {
//            $extension = $image->getClientOriginalExtension();
//            $fileName = str_shuffle(md5(date('Y-m-d\TH:i:s.u'))) . '.' . $extension;
//            $image->move(public_path() . '\assets\images', $fileName);
//            $imgSrcs .= $fileName . ',';
//        }
//
//        $car->images_src = substr($imgSrcs, 0, -1);
//        $car->save();
//
//        return redirect('/');
    }
}
