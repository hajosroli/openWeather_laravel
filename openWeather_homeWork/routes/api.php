<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\WeatherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Get Weather data
Route::get('/weathers', [WeatherController::class, 'index'])->name('weathers.index');

// Get Weather of City
Route::get('/getWeather/{city}', [WeatherController::class, 'showWeatherByCityName']);


// Form for adding City
Route::get('/addCity', function (){
    return view('addCity');
})->name('cities.add');

// Store City in Db
Route::post('/addCity', [CityController::class, 'storeCity']);
