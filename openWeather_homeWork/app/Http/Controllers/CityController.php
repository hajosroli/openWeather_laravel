<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        return City::all();
    }

    public function create()
    {

    }

    public function storeCity(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        // Create a new city in the database
        $city = City::create($validatedData);

        return response('City was succesfully added!', 200);
    }

    public function show(City $city)
    {
    }

    public function edit(City $city)
    {
    }

    public function update(Request $request, City $city)
    {
    }

    public function destroy(City $city)
    {
    }
}
