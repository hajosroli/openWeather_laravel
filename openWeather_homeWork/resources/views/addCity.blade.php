<h2>Add a New City</h2>

@if(session('message'))
    <p>{{ session('message') }}</p>
@endif

<form action="{{ route('cities.add') }}" method="post">
    @csrf

    <label for="name">City Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="latitude">Latitude:</label>
    <input type="text" name="latitude" id="latitude" required>

    <label for="longitude">Longitude:</label>
    <input type="text" name="longitude" id="longitude" required>

    <button type="submit">Add City</button>
</form>
