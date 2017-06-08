<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makes;

class LoadModelsController extends Controller
{
    public function loadModels(Request $request)
    {
        return json_encode(Makes::where('make', $request->make)->first()->models->pluck('models'));
    }
}
