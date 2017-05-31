<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Addcar;
use Illuminate\Support\Facades\Storage;

class AddCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('carviews.addcar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Addcar();

        $this->validate($request, [
            'make' => 'required',
            'model' => 'required',
            'year' => 'required',
            'price' => 'required',
            'fuel' => 'required',
            'power' => 'required'
        ]);

        $car->make = $request->make;
        $car->model = $request->model;
        $car->year = $request->year;
        $car->price = $request->price;
        $car->fuel = $request->fuel;
        $car->power = $request->power;
        $car->condition = $request->condition;
        $files = $request->file('file');

        if (empty($files)) {
            echo "Няма избрани изображения!";
            return 0;
        }

        $imgSrcs = '';

        foreach ($files as $file) {
            $extension = $file->getClientOriginalExtension();
            $fileName = str_shuffle(md5(date('Y-m-d\TH:i:s.u'))) . '.' . $extension;
            $file->move(public_path() . '\assets\images', $fileName);
            $imgSrcs .= $fileName . ',';
        }

        $car->images_src = substr($imgSrcs, 0, -1);
        $car->save();

        echo "Успешен запис!";
        return redirect('/');
    }
}
