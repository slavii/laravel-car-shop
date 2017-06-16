<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function findResults(Request $request)
    {
        $carData = [
            'car_make_id' => $request->make,
            'car_model_id' => $request->model,
            'priceTo' => $request->priceTo,
            'yearFrom' => $request->yearFrom,
            'fuel_id' => $request->fuel,
            'gears_id' => $request->gears,
        ];

        $carData['car_make_id'] = ($carData['car_make_id'] == null) ? $this->carMakeService->findAllIds() : array($carData['car_make_id']);

        $carData['car_model_id'] = ($carData['car_model_id'] == null) ? $this->carModelService->findAllIds() : array($carData['car_model_id']);

        $carData['fuel_id'] = ($carData['fuel_id'] == null) ? $this->fuelService->findAllIds() : array($carData['fuel_id']);

        $carData['gears_id'] = ($carData['gears_id'] == null) ? $this->gearService->findAllIds() : array($carData['gears_id']);

        foreach ($carData as $key => $value) {

            if ($carData[$key] == null) {

                switch ($key) {

                    case 'priceTo': {
                        $carData[$key] = $this->carService->findMaxPrice();
                        break;
                    }

                    case 'yearFrom': {
                        $carData[$key] = $this->carService->findMinYear();
                        break;
                    }
                }
            }
        }

        $sortBy = $request->sortBy;
        $carIds = [];

        switch ($sortBy) {
            case 'priceAsc': {
                $carIds = $this->carService->findByShortParamsSortAsc($carData, 'price');
                break;
            }
            case 'priceDesc': {
                $carIds = $this->carService->findByShortParamsSortDesc($carData, 'price');
                break;
            }
            case 'createdAsc': {
                $carIds = $this->carService->findByShortParamsSortDesc($carData, 'created_at');
                break;
            }
            case 'createdDesc': {
                $carIds = $this->carService->findByShortParamsSortAsc($carData, 'created_at');
                break;
            }
            case 'yearsAsc': {
                $carIds = $this->carService->findByShortParamsSortAsc($carData, 'year');
                break;
            }
            case 'yearsDesc': {
                $carIds = $this->carService->findByShortParamsSortDesc($carData, 'year');
                break;
            }
            case 'mileageAsc': {
                $carIds = $this->carService->findByShortParamsSortAsc($carData, 'mileage');
                break;
            }
            case 'mileageDesc': {
                $carIds = $this->carService->findByShortParamsSortDesc($carData, 'mileage');
                break;
            }
            case 'powerAsc': {
                $carIds = $this->carService->findByShortParamsSortAsc($carData, 'power');
                break;
            }
            case 'powerDesc': {
                $carIds = $this->carService->findByShortParamsSortDesc($carData, 'power');
                break;
            }
        }

        $cars = $this->carService->findByIds($carIds);

//        dd($cars[0]->images->all());

        return redirect('results')->with('cars', $cars);
    }
}