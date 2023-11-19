<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Weather;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index()
    {
        $weathers = Weather::all();

        return view('index', compact('weathers'));
    }

    public function showWeatherByCityName($cityName)
    {
        $city = City::where('name', $cityName)->first();

        if (!$city) {
            return response('City not found', 404);
        }

        $weathers = $city->weathers()->where('time', '>', now()->subDay())->get();

        return $weathers;
    }

}
