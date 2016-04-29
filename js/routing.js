function initMap() {
    
  var rioBranco     = {lat: -9.9754873,   lng: -67.82507};
  var aracaju       = {lat: -10.9479068,  lng: -37.0706065};
  var belem         = {lat: -1.4590477,   lng: -48.48916};
  var beloHorizonte = {lat: -19.9213838,  lng: -43.9297292};
  var boaVista      = {lat: 2.8228421,    lng: -60.6755145};
  var brasilia      = {lat: -15.7953802,  lng: -47.881342};
  var campoGrande   = {lat: -20.4714177,  lng: -54.6200271};
  var cuiaba        = {lat: -15.6022237,  lng: -56.0975998};
  var curitiba      = {lat: -25.4289636,  lng: -49.26705};
  var florianopolis = {lat: -27.595476,   lng: -48.5489534};
  var fortaleza     = {lat: -3.7313358,   lng: -38.5248218};
  // var goiania       = {lat: ,   lng: };
  // var joaoPessoa    = {lat: ,   lng: };
  // var maceio        = {lat: ,   lng: };
  // var manaus        = {lat: ,   lng: };
  // var natal         = {lat: ,   lng: };
  // var palmas        = {lat: ,   lng: };
  // var portoAlegre   = {lat: ,   lng: };
  // var portoVelho    = {lat: ,   lng: };
  // var recife        = {lat: ,   lng: };
  // var rioBranco     = {lat: ,   lng: };
  // var rioDeJaneiro  = {lat: ,   lng: };
  // var salvador      = {lat: ,   lng: };
  // var saoLuis       = {lat: ,   lng: };
  // var saoPaulo      = {lat: ,   lng: };
  // var teresinha     = {lat: ,   lng: };
  // var vitoria       = {lat: ,   lng: };


  var origem = rioBranco;

  var map = new google.maps.Map(document.getElementById('mapa'), {
    center: origem,
    scrollwheel: true,
    zoom: 17
  });

  var directionsDisplay = new google.maps.DirectionsRenderer({
    map: map
  });

  // Set destination, origin and travel mode.
  var request = {
    destination: origem,
    origin: origem,
    waypoints: [
      {location: belem, stopover: true},
      {location: aracaju, stopover: true},
      {location: beloHorizonte, stopover: true},
      {location: boaVista, stopover: true},
      {location: brasilia, stopover: true},
      {location: campoGrande, stopover: true},
      {location: cuiaba, stopover: true},
      {location: curitiba, stopover: true},
      {location: florianopolis, stopover: true},
      {location: fortaleza, stopover: true}
      // {location: boaVista, stopover: true}
      // {location: boaVista, stopover: true}
      // {location: boaVista, stopover: true}
      // {location: boaVista, stopover: true}
      // {location: boaVista, stopover: true}
      // {location: boaVista, stopover: true}
      // {location: boaVista, stopover: true}
      // {location: boaVista, stopover: true}
      // {location: boaVista, stopover: true}
      // {location: boaVista, stopover: true}
      // {location: boaVista, stopover: true}
      // {location: boaVista, stopover: true}
      // {location: boaVista, stopover: true}
      // {location: boaVista, stopover: true}
    ],
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