<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;

class WeatherService
{
    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getCurrentWeather($latitude, $longitude)
    {
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather", [
            'lat' => $latitude,
            'lon' => $longitude,
            'appid' => $this->apiKey
        ]);

        return $response->json();
    }
}
