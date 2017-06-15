<?php

namespace App\Http\Controllers;


class ResultsPageController extends BaseController
{

    public function index()
    {
        return view('carviews.results');
    }
}