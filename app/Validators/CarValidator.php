<?php

namespace App\Validators;

use Illuminate\Http\Request;

class CarValidator
{

    private $carValidators = [];

    public function __construct(Request $request)
    {
        $this->carValidators = $request;
    }

    public function validateFields()
    {
        $carFields = [
            $this->carValidators['Make'],
            $this->carValidators['Model'],
            $this->carValidators['Condition'],
            $this->carValidators['Price'],
            $this->carValidators['Year'],
            $this->carValidators['Fuel'],
            $this->carValidators['Power'],
            $this->carValidators['Gears'],
            $this->carValidators['Body'],
            $this->carValidators['Color'],
            $this->carValidators['Mileage'],
            $this->carValidators['Region'],
            $this->carValidators['Doors']
        ];

        foreach ($carFields as $carField) {
            if ($carField != integerValue()) {
                return 0;
            }
        }
    }
}