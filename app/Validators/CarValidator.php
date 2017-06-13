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
        $validator = Validator::make($this->carValidators->all(), [
            'make' => 'required',
            'model' => 'required',
            'condition' => 'required',
            'price' => 'required|max:8|integer',
            'year' => 'required',
            'fuel' => 'required',
            'power' => 'required|max:4|integer',
            'gears' => 'required',
            'body' => 'required',
            'color' => 'required',
            'mileage' => 'required|max:8|integer',
            'region' => 'required',
            'doors' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/addcar')
                ->withErrors($validator)
                ->withInput();
        }
    }
}