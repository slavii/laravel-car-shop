<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FindCarPageController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('carviews.findcar');
    }

    public function showResults()
    {

    }
}
