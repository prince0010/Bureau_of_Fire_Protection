

 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add a geocoder</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link href="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>
<style>
body { margin: 0; padding: 0; }
#map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>
</head>
<body>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">
 
<div id="map"></div>
 
<script>
   
	mapboxgl.accessToken = 'pk.eyJ1IjoiZGV4dGVydGFuMTIzMiIsImEiOiJjbGVvZHV0M28wMWcyM3RscGRlZWZtZm5zIn0.a2eGqxFwCGC0uxAALycJtA';
const map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v12',
center: [124.643736, 8.47761],
zoom: 13
});

map.addControl(
new MapboxGeocoder({
accessToken: mapboxgl.accessToken,
mapboxgl: mapboxgl
})
);
</script>
</body>
</html> 

<!-- 
Sure, integrating Google Maps with a search bar in PHP typically involves using the Google Maps JavaScript API for the frontend and handling the search and map-related functionalities on the server side with PHP. Below is a simple example code for Google Map integration with a search bar using PHP and JavaScript.

index.html: -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Maps Integration</title>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <input type="text" id="locationInput" placeholder="Enter location">
    <button onclick="searchLocation()">Search</button>
    <div id="map"></div>

    <script>
        function initMap() {
            // Set the default location (you can set it to a specific location or leave it empty)
            var defaultLocation = { lat: -34.397, lng: 150.644 };

            // Initialize the map
            var map = new google.maps.Map(document.getElementById('map'), {
                center: defaultLocation,
                zoom: 12
            });

            // Create a marker (optional, can be omitted if not needed)
            var marker = new google.maps.Marker({
                map: map,
                position: defaultLocation,
                draggable: true
            });

            // Add a listener to update the marker position when it is dragged
            marker.addListener('dragend', function () {
                updateLocation(marker.getPosition());
            });
        }

        function searchLocation() {
            var locationInput = document.getElementById('locationInput').value;

            // You can perform an AJAX request to the server here to get the coordinates for the entered location using PHP
            // For simplicity, let's assume the server returns the coordinates as an object { lat: xxx, lng: xxx }
            
            // Example coordinates (replace with actual coordinates from the server)
            mapboxgl.accessToken = 'pk.eyJ1IjoiZGV4dGVydGFuMTIzMiIsImEiOiJjbGVvZHV0M28wMWcyM3RscGRlZWZtZm5zIn0.a2eGqxFwCGC0uxAALycJtA';
            const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v12',
            center: [124.643736, 8.47761],
            zoom: 13
            });

            map.addControl(
            new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            mapboxgl: mapboxgl
            })
            );
                    }

        function updateLocation(position) {
            // Update the location on the server using an AJAX request with PHP (not implemented in this example)
            console.log('Updated location:', position);
        }
    </script>

    <!-- Include the Google Maps JavaScript API with your API key -->
    <script src="https://maps.googleapis.com/maps/api/js?key=pk.eyJ1IjoiZGV4dGVydGFuMTIzMiIsImEiOiJjbGVvZHV0M28wMWcyM3RscGRlZWZtZm5zIn0.a2eGqxFwCGC0uxAALycJtA&callback=initMap" async defer></script>
</body>
</html>


<!-- Replace YOUR_API_KEY in the script tag with your actual Google Maps API key.

This is a basic example, and you may need to enhance it based on your specific requirements. Additionally, keep in mind that handling location searches securely and efficiently involves server-side validation and processing, which is beyond the scope of this simple example. -->



