<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends BaseController
{
    public function setLocation(Request $request)
    {
        $location = $request->location;

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, 'https://maps.googleapis.com/maps/api/geocode/json?address=' . rawurlencode($location));

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $json = curl_exec($curl);

        $array = json_decode($json);

        $lat = $array->results[0]->geometry->location->lat;
        $lng = $array->results[0]->geometry->location->lng;

        echo json_encode([
            'lat' => $lat,
            'lng' => $lng
        ]);

        curl_close($curl);
    }
}
