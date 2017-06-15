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

    public function validateFields()
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

        $validator = Validator::make($this->carValidators->all(), [
            'make' => 'required',
            'model' => 'required',
            'condition' => 'required',
            'price', 'priceFrom', 'priceTo' => 'required|min:1|max:8|integer',
            'year', 'yearFrom', 'yearTo' => 'required|integer',
            'fuel' => 'required',
            'power', 'powerFrom', 'powerTo'  => 'required|min:1|max:4|integer',
            'gears' => 'required',
            'body' => 'required',
            'color' => 'required',
            'mileage', 'mileageFrom', 'mileageTo' => 'required|min:1|max:8|integer',
            'region' => 'required',
            'doors' => 'required'
        ], $messages);

        if ($validator->fails()) {
            return redirect('/addcar')
                ->withErrors($validator)
                ->withInput();
        }
    }
}