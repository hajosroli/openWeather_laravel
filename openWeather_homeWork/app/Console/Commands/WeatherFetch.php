<?php

namespace App\Console\Commands;

use App\Models\City;
use App\Models\Weather;
use App\Services\WeatherService;
use Illuminate\Console\Command;

class WeatherFetch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'weather:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch current weather and store it in the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $cities = City::all();
        $apiKey = config('services.openweather.api_key');
        $weatherService = new WeatherService($apiKey);

        foreach ($cities as $city) {
            $weatherData = $weatherService->getCurrentWeather($city->latitude, $city->longitude);

            // Save the weather data to the database
            Weather::create([
                'city_id' => $city->id,
                'time' => now(),
                'name' => $weatherData['name'],
                'latitude' => $weatherData['coord']['lat'],
                'longitude' => $weatherData['coord']['lon'],
                'temperature' => $weatherData['main']['temp'],
                'pressure' => $weatherData['main']['pressure'],
                'humidity' => $weatherData['main']['humidity'],
                'min_temperature' => $weatherData['main']['temp_min'],
                'max_temperature' => $weatherData['main']['temp_max'],
            ]);
        }

        $this->info('Weather data fetched and stored successfully.');
    }
}
