<h2>Weather Data</h2>

@if ($weathers->isEmpty())
    <p>No available weather data</p>
@else
    <table border="1">
        <thead>
        <tr>
            <th>City</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>Temperature (°C)</th>
            <th>Pressure (hPa)</th>
            <th>Humidity (%)</th>
            <th>Min Temperature (°C)</th>
            <th>Max Temperature (°C)</th>
        </tr>
        </thead>
        <tbody>
        @foreach($weathers as $weather)
            <tr>
                <td>{{ $weather->city->name }}</td>
                <td>{{ $weather->city->latitude }}</td>
                <td>{{ $weather->city->longitude }}</td>
                <td>{{ $weather->temperature }}</td>
                <td>{{ $weather->pressure }}</td>
                <td>{{ $weather->humidity }}</td>
                <td>{{ $weather->min_temperature }}</td>
                <td>{{ $weather->max_temperature }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif
