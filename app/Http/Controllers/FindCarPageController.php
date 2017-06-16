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

        return view('carviews.findcar', ['array' => $array]);
    }

    public function findResults(Request $request)
    {
        $carData = [
            'car_make_id' => $request->make,
            'car_model_id' => $request->model,
            'condition_id' => $request->condition,
            'priceFrom' => $request->priceFrom,
            'priceTo' => $request->priceTo,
            'yearFrom' => $request->yearFrom,
            'yearTo' => $request->yearTo,
            'fuel_id' => $request->fuel,
            'powerFrom' => $request->powerFrom,
            'powerTo' => $request->powerTo,
            'gears_id' => $request->gears,
            'body_id' => $request->body,
            'color_id' => $request->color,
            'mileageFrom' => $request->mileageFrom,
            'mileageTo' => $request->mileageTo,
            'region_id' => $request->region,
            'door_id' => $request->doors,
            'equipments' => $request->equipments
        ];

        $carData['car_make_id'] = ($carData['car_make_id'] == null) ? $this->carMakeService->findAllIds() : array($carData['car_make_id']);

        $carData['car_model_id'] = ($carData['car_model_id'] == null) ? $this->carModelService->findAllIds() : array($carData['car_model_id']);

        $carData['condition_id'] = ($carData['condition_id'] == null) ? $this->conditionService->findAllIds() : array($carData['condition_id']);

        $carData['fuel_id'] = ($carData['fuel_id'] == null) ? $this->fuelService->findAllIds() : array($carData['fuel_id']);

        $carData['gears_id'] = ($carData['gears_id'] == null) ? $this->gearService->findAllIds() : array($carData['gears_id']);

        $carData['body_id'] = ($carData['body_id'] == null) ? $this->bodyService->findAllIds() : array($carData['body_id']);

        $carData['color_id'] = ($carData['color_id'] == null) ? $this->colorService->findAllIds() : array($carData['color_id']);

        $carData['region_id'] = ($carData['region_id'] == null) ? $this->regionService->findAllIds() : array($carData['region_id']);

        $carData['door_id'] = ($carData['door_id'] == null) ? $this->doorService->findAllIds() : array($carData['door_id']);

        foreach ($carData as $key => $value) {

            if ($carData[$key] == null) {

                switch ($key) {

                    case 'priceFrom': {
                        $carData[$key] = $this->carService->findMinPrice();
                        break;
                    }

                    case 'priceTo': {
                        $carData[$key] = $this->carService->findMaxPrice();
                        break;
                    }

                    case 'yearFrom': {
                        $carData[$key] = $this->carService->findMinYear();
                        break;
                    }

                    case 'yearTo': {
                        $carData[$key] = $this->carService->findMaxYear();
                        break;
                    }

                    case 'powerFrom': {
                        $carData[$key] = $this->carService->findMinPower();
                        break;
                    }

                    case 'powerTo': {
                        $carData[$key] = $this->carService->findMaxPower();
                        break;
                    }

                    case 'mileageFrom': {
                        $carData[$key] = $this->carService->findMinMileage();
                        break;
                    }

                    case 'mileageTo': {
                        $carData[$key] = $this->carService->findMaxMileage();
                        break;
                    }
                }
            }
        }

        $sortBy = $request->sortBy;
        $carIds = [];

        switch ($sortBy) {
            case 'priceAsc': {
                $carIds = $this->carService->findByParamsSortAsc($carData, 'price');
                break;
            }
            case 'priceDesc': {
                $carIds = $this->carService->findByParamsSortDesc($carData, 'price');
                break;
            }
            case 'createdAsc': {
                $carIds = $this->carService->findByParamsSortDesc($carData, 'created_at');
                break;
            }
            case 'createdDesc': {
                $carIds = $this->carService->findByParamsSortAsc($carData, 'created_at');
                break;
            }
            case 'yearsAsc': {
                $carIds = $this->carService->findByParamsSortAsc($carData, 'year');
                break;
            }
            case 'yearsDesc': {
                $carIds = $this->carService->findByParamsSortDesc($carData, 'year');
                break;
            }
            case 'mileageAsc': {
                $carIds = $this->carService->findByParamsSortAsc($carData, 'mileage');
                break;
            }
            case 'mileageDesc': {
                $carIds = $this->carService->findByParamsSortDesc($carData, 'mileage');
                break;
            }
            case 'powerAsc': {
                $carIds = $this->carService->findByParamsSortAsc($carData, 'power');
                break;
            }
            case 'powerDesc': {
                $carIds = $this->carService->findByParamsSortDesc($carData, 'power');
                break;
            }
        }

        $cars = $this->carService->findByIds($carIds);

//        dd($cars[0]->images->all());

        return redirect('results')->with('cars', $cars);
    }
}
