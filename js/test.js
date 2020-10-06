var gstService = new google.maps.StreetViewService();

var STREETVIEW_MAX_DISTANCE = 1000000;
var latLng = new google.maps.LatLng(40.7140, -74.0062);
gstService.getPanorama(latLng, STREETVIEW_MAX_DISTANCE, function (streetViewPanoramaData, status) {
    if (status === google.maps.StreetViewStatus.OK) {
        // ok
    } else {
        random_location();
    }
});

var gstService = new google.maps.StreetViewService();

gstService.getPanorama({
    location: new google.maps.LatLng(40.7140, -74.0062),
    source: google.maps.StreetViewSource.OUTDOOR
}, function (data, status) {
    if (status === google.maps.StreetViewStatus.OK) {
        // OK
    } else {
        random_location();
    }
});

function random_location() {
  return {
    lon: Math.floor(Math.random()*360) - 180,
    lat: Math.round(Math.acos(2*Math.random() - 1)*180/Math.PI) - 90
  }
}




// Create worldmap and streetview
function initialize() {
  const map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 30, lng: 0},
    zoom: 3,
    mapTypeId: "roadmap",
    streetViewControl: false,
  });

  // This event listener calls addMarker() when the map is clicked
  google.maps.event.addListener(map, "click", event => {
    addMarker(event.latLng, map);
    latB = event.latLng.lat();
    lngB = event.latLng.lng();
    console.log(latB);
    console.log(lngB);
    document.getElementById('guessButton').disabled = false;
  });

  random_location();

  var sv = new google.maps.StreetViewService();
  sv.getPanorama({
      location: new google.maps.LatLng(latTest),
      source: google.maps.StreetViewSource.OUTDOOR,
      radius: 50000
  }, function (data, status) {
      if (status === google.maps.StreetViewStatus.OK) {
          console.log("FOUNDDD")
      } else {
          random_location();
      }
  });

  const panorama = new google.maps.StreetViewPanorama(
    document.getElementById("streetview"),
    {
      position: { lat: 0, lng: 0},
      pov: {
        heading: 60,
        pitch: 10
      }
    }
  );
  map.setStreetView(panorama);
}
