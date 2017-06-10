<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Addcar;

class DisplayImagesController extends BaseController
{
    public function display($id)
    {
        $loadImages = Addcar::find($id)->images_src;
        $images = explode(',', $loadImages);

        return view('carviews.showcar', ['images' => $images]);
    }
}