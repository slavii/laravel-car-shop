<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Make;

class LoadModelsController extends Controller
{
    public function loadModels(Request $request)
    {
        return json_encode(Make::where('make', $request->make)->first()->models->pluck('model'));
    }
}
