<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Weather;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index()
    {
        return Weather::all();
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
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

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
