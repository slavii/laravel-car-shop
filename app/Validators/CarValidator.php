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

    public function validateMake()
    {
        if ($this->carValidators['make'] != integerValue())
        {
            return 0;
        }

        return 1;
    }
}