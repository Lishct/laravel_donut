<!DOCTYPE html>
<html>
<head>
    <title>Restaurants List</title>
</head>
<body>
    <h1>Restaurants</h1>
    <ul>
        @foreach($products as $restaurant)
            <li>
                <strong>{{ $restaurant['name'] }}</strong> - 
                Location: {{ $restaurant['location'] }} - 
                Rating: {{ $restaurant['rating'] }}
            </li>
        @endforeach
    </ul>
</body>
</html>
