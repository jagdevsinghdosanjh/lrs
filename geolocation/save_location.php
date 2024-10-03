<?php
// Get the JSON data from the request
$data = json_decode(file_get_contents('php://input'), true);

// Extract latitude and longitude
$latitude = $data['latitude'];
$longitude = $data['longitude'];

// Save the data to a file (or you can save it to a database)
$file = fopen('location.txt', 'a');
fwrite($file, "Latitude: $latitude, Longitude: $longitude\n");
fclose($file);

echo 'Location saved successfully';
?>
