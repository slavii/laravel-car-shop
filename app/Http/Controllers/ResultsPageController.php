<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class ResultsPageController extends BaseController
{

    public function index()
    {
        $cars = Session::get('cars');
        return view('carviews.results', ['cars' => $cars]);
    }
}