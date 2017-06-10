<?php

namespace App\Http\Controllers;

use App\Services\BodyService;
use App\Services\CarMakeService;
use App\Services\ColorService;
use App\Services\ConditionService;
use App\Services\FuelService;
use App\Services\GearService;
use App\Services\RegionService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $carMakeService;
    protected $fuelService;
    protected $gearService;
    protected $conditionService;
    protected $bodyService;
    protected $colorService;
    protected $regionService;

    public function __construct(CarMakeService $cms,
                                FuelService $fs,
                                GearService $gs,
                                ConditionService $cs,
                                BodyService $bs,
                                ColorService $cols,
                                RegionService $rs)
    {
        $this->carMakeService = $cms;
        $this->fuelService = $fs;
        $this->gearService = $gs;
        $this->conditionService = $cs;
        $this->bodyService = $bs;
        $this->colorService = $cols;
        $this->regionService = $rs;
    }
}