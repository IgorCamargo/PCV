function initMap() {
  var origem = {lat: 41.85, lng: -87.65};
  var chegada = {lat: 39.79, lng: -86.14};
  // var origem = 'Porto Alegre';
  // var chegada = 'Curitiba';
var first = new google.maps.LatLng(42.496403, -124.413128);
var second = new google.maps.LatLng(42.496401, -124.413126);

  var map = new google.maps.Map(document.getElementById('mapa'), {
    center: origem,
    scrollwheel: true,
    zoom: 7
  });

  var directionsDisplay = new google.maps.DirectionsRenderer({
    map: map
  });

  // Set destination, origin and travel mode.
  var request = {
    destination: chegada,
    origin: origem,
    waypoints: [{location: first, stopover: true}, {location: second, stopover: true}],
    optimizeWaypoints: true,
    travelMode: google.maps.TravelMode.DRIVING
  };

  // Pass the directions request to the directions service.
  var directionsService = new google.maps.DirectionsService();
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      // Display the route on the map.
      directionsDisplay.setDirections(response);
    }
  });
}