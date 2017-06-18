<?php

namespace App\Validators;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarValidator
{

    private $carValidators = [];

    public function __construct(Request $request)
    {
        $this->carValidators = $request;
    }

    public function validateFields(Request $request)
    {
        $messages = [
            'make.required' => 'Полето -Марка- е задължително.',
            'model.required' => 'Полето -Модел- е задължително.',
            'condition.required' => 'Полето -Състояние- е задължително.',
            'price.required' => 'Полето -Цена- е задължително.',
            'year.required' => 'Полето -Година- е задължително.',
            'fuel.required' => 'Полето -Двигател- е задължително.',
            'power.required' => 'Полето -Мощност- е задължително.',
            'gears.required' => 'Полето -Скоростна кутия- е задължително.',
            'body.required' => 'Полето -Категория- е задължително.',
            'color.required' => 'Полето -Цвят- е задължително.',
            'mileage.required' => 'Полето -Пробег- е задължително.',
            'region.required' => 'Полето -Област- е задължително.',
            'doors.required' => 'Полето -Брой врати- е задължително.',
        ];

        $validator = Validator::make($request->all(), [
            'make' => 'required',
            'model' => 'required',
            'condition' => 'required',
            'price' => 'required',
//            'price' => 'required|min:1|max:8|integer',
//            'priceFrom' => 'min:1|max:8|integer',
//            'priceTo' => 'min:1|max:8|integer',
            'year' => 'required',
//            'year' => 'required|integer',
//            'yearFrom' => 'integer',
//            'yearTo' => 'integer',
            'fuel' => 'required',
            'power'  => 'required',
//            'power'  => 'required|min:1|max:4|integer',
//            'powerFrom' => 'min:1|max:4|integer',
//            'powerTo' => 'min:1|max:4|integer',
            'gears' => 'required',
            'body' => 'required',
            'color' => 'required',
            'mileage' => 'required',
//            'mileage' => 'required|min:1|max:8|integer',
//            'mileageFrom' => 'min:1|max:8|integer',
//            'mileageTo' => 'min:1|max:8|integer',
            'region' => 'required',
            'doors' => 'required'
        ], $messages);

        if ($validator->fails()) {
            return [$validator];
        }

        return [];
    }
}